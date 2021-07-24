print "content-type:text/html","\n\n";
print <<EOF
<HTML>
<HEAD><TITLE>About this Server</TITLE></HEAD>
<BODY><H1>Server Information</H1>
<HR><PRE>
Server Name:        $ENV{'SERVER_NAME'}<BR>
Running on Port:    $ENV{'SERVER_PORT'}<BR>
Server Software:    $ENV{'SERVER_SOFTWARE'}<BR>
Server Protocol:    $ENV{'SERVER_PROTOCOL'}<BR>
CGI Revision:       $ENV{'GATEWAY_INTERFACE'}<BR>
Browser:            $ENV{'HTTP_USER_AGENT'}<BR>
<HR></PRE>
</BODY></HTML>
EOF
