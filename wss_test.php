<!DOCTYPE html>
<html>
<head>
	<title>WSS Test Connection | SIP JS</title>
</head>
<ul>
  <li><a href="ws_test.php">WS Test</a></li>
  <li><a href="wss_test.php">WSS Test</a></li>
</ul>
<body>
<script type="text/javascript" src="js/sip-0.13.5.min.js"></script>
<script type="text/javascript">
var config = {
  // Replace this IP address with your FreeSWITCH IP address
  uri: '1000@192.168.1.170',

  // Replace this IP address with your FreeSWITCH IP address
  // and replace the port with your FreeSWITCH wss port
  //ws_servers: 'wss://192.168.1.170:7443',
  transportOptions: {
    wsServers: ['wss://192.168.1.170:7443']
  },

  // FreeSWITCH Default Username
  authorizationUser: '1000',
  displayName: "Tarek Kalaji",
  autostart: true,

  // FreeSWITCH Default Password
  password: '1234',
  register: true
};

window.ua = new SIP.UA(config);
ua.start();
console.log(ua.isRegistered());
</script>
</body>
</html>