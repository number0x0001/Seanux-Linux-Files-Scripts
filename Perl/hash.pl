#!/usr/bin/perl
# MD5 Hash Bruteforce Kit
# by sniper c0de :)
# sniper_c0de@hotmail.com
# Date : 11.2.2008
# Info[0] : This Cracker is the fastest it helped me alot to find passwords ;)
# Info[1] : Written under Kubuntu Linux (Throw away Windows!)
# Info[2] : If you can code a bit perl, you can modify it to crack sha etc too...
# Greets to: Invisible!
$ver = "01";
$dbgtmr = "1"; #Intervall of showing the current speed + lastpassword in seconds.

if ($dbgtmr<=0){ die "Set dbgtmr to a value >=1 !\n";};
use Digest::MD5 qw(md5_hex);
use Time::HiRes qw(gettimeofday);

if ($ARGV[0]=~"a") {
 $alpha = "abcdefghijklmnopqrstuvwxyz";}
if ($ARGV[0]=~"A") {
 $alpha = $alpha. "ABCDEFGHIJKLMNOPQRSTUVWXYZ";}
if ($ARGV[0]=~"d") {
 $alpha = $alpha."1234567890";}
if ($ARGV[0]=~"x") {
 $alpha = $alpha. "!\"\$%&/()=?-.:\\*'-_:.;,";}

if ($alpha eq "" or $ARGV[3] eq "") {usage();};
if (length($ARGV[3]) != 32) { die "Sorry but it seems that the MD5 is not valid!\n";};

print "Selected charset for attack: '$alpha\'\n";
print "Going to Crack '$ARGV[3]'...\n";

for (my $t=$ARGV[1];$t<=$ARGV[2];$t++){
 crack ($t);
}

sub usage{
 print "\n\nMD5 Hash Bruteforce Kit v_$ver\n";
 print "sniper code sniper_c0de\n";
 print "sniper code\/\n\n";
 print "USAGE\n";
 print "./md5crack <charset> <mincount> <maxcount> <yourMD5>\n";
 print " Charset can be: [aAdx]\n";
 print " a = {'a','b','c',...}\n";
 print " A = {'A','B','C',...}\n";
 print " d = {'1','2','3',...}\n";
 print " x = {'!','\"',' ',...}\n";
 print "EXAMPLE FOR CRACKING A MD5 HASH\n";
 print "./md5crack.pl ad 1 3 900150983cd24fb0d6963f7d28e17f72\n";
 print " This example tries to crack the given MD5 with all lowercase Alphas and all digits.\n";
 print " MD5 Kit only tries combinations with a length from 1 and 3 characters.\n-------\n";
 print "./md5crack.pl aA 3 3 900150983cd24fb0d6963f7d28e17f72\n";
 print " This example tries to crack the given MD5 with all lowercase Alphas and all uppercase Alphas.\n";
 print " MD5 Kit only tries passwords which length is exactly 3 characters.\n-------\n";
 print "./md5crack.pl aAdx 1 10 900150983cd24fb0d6963f7d28e17f72\n";
 print " This example tries to crack the given MD5 with nearly every character.\n";
 print " MD5 Kit only tries combinations with a length from 1 to 10 characters.\n";
 die "Quitting...\n";
}

sub crack{
 $CharSet = shift;
 @RawString = ();
 for (my $i =0;$i<$CharSet;$i++){ $RawString[i] = 0;}
 $Start = gettimeofday();
 do{
  for (my $i =0;$i<$CharSet;$i++){
   if ($RawString[$i] > length($alpha)-1){
    if ($i==$CharSet-1){
    print "Bruteforcing done with $CharSet Chars. No Results.\n";
    $cnt=0;
    return false;
   }
   $RawString[$i+1]++;
   $RawString[$i]=0;
   }
  }
###################################################
   $ret = "";
   for (my $i =0;$i<$CharSet;$i++){ $ret = $ret . substr($alpha,$RawString[$i],1);}
   $hash = md5_hex($ret);
   $cnt++;
   $Stop = gettimeofday();
   if ($Stop-$Start>$dbgtmr){
    $cnt = int($cnt/$dbgtmr);
    print "$cnt hashes\\second.\tLast Pass '$ret\'\n";
    $cnt=0;
    $Start = gettimeofday();
   }
            print "$ARGV[3] != $hash ($ret)\n";
   if ($ARGV[3] eq $hash){
    die "\n**** Password Cracked! => $ret\n";
   }
###################################################
  #checkhash($CharSet)."\n";

  $RawString[0]++;
 }while($RawString[$CharSet-1]<length($alpha));
}

sub checkhash{
 $CharSet = shift;
 $ret = "";
 for (my $i =0;$i<$CharSet;$i++){ $ret = $ret . substr($alpha,$RawString[$i],1);}
 $hash = md5_hex($ret);
 $cnt++;
 $Stop = gettimeofday();
 if ($Stop-$Start>$dbgtmr){
  $cnt = int($cnt/$dbgtmr);
  print "$cnt hashes\\second.\tLast Pass '$ret\'\n";
  $cnt=0;
  $Start = gettimeofday();
 }

 if ($ARGV[3] eq $hash){
  die "\n**** Password Cracked! => $ret\n";
 }
 
}