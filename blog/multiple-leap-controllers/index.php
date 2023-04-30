<?php include( '../../includes/meta.php'); ?>
    <title>Multiple Leap Motion Controllers On the Same Single Computer - Erik Paluka</title>
    <meta name="description" content="Multiple Leap Motion Controllers On the Same Single Computer">

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">
            
              <div class="blogEntry" id="MultLeap">
                <div class="blogTitle">
                    <h1>Using Multiple Leap Motion Controllers
                        <br>On the Same Computer <br>
                        <span style="color:#FFF; font-size: 10px; line-height: 10px;max-height: 10px;display: block;">Using Multiple Leap Motion Controllers On a Single Computer</span></h1> 
                    
                    <a href="https://www.leapmotion.com/" target="_blank">www.leapmotion.com</a>
                    <div class='bDate'>Date: February 12, 2014</div>
                    
                    <div style="margin-top: -20px; margin-bottom: 50px;">You can find related source code on <a href="https://github.com/paluka/Multi-Leap" target="_blank"><img id="onGithub" src="../../img/socialIcons/github.png" alt="GitHub" width="56" height="25"></a></div>
                  </div>
                
                 
                  
                <div class="blogText">
                    <p>At the moment, Leap Motion does not officially support using two or more Leap Motion controllers on the same computing device. To get around this, you can set up a virtual machine (VM) on your computer (host). With my setup, I installed <a target="_blank" href="http://www.vmware.com/">VMware Player</a> with <a target="_blank" href="http://www.linuxmint.com/">Linux Mint 13 (Maya)</a> as the operating system. Before choosing what operating system to use, remember to read the current minimum system requirements for the Leap software.</p>
                    <br>
                    <p>
                    After installing the Leap Motion controller software (version 1) on the VM and the host machine, connect the two Leap Motion controllers to your computer, and make sure that your VM takes control/connects to one of them. At this point, you should use Leap's diagnostic visualization software to make sure that each machine is receiving data from the devices.
                    </p>
                    <br>
                    <p>
                    The Leap Motion service/daemon uses TCP to send the tracking data to the 127.0.0.1 IP address (localhost) at port 6437. An easy way to retrieve data from both controllers is to create a web application &#8212; on your host computer &#8212; that uses the WebSocket protocol. Within your VM, set the network option to host-only and run the operating system's network interface configurator by typing in
                    <ul><li>Linux or Mac:</li></ul> <code>ifconfig</code>
                    <ul><li>Windows:</li></ul>  <code>ipconfig</code>
                        into the terminal. When you do this, you will see the IP address for the VM. Use WebSockets to connect to that IP adress at port 6437. If you also use WebSockets to connect to the localhost IP address (127.0.0.1) at port 6437, you should now be receiving tracking data from both controllers.
                    </p>
                    <br>
                    <p>
                        <span class="bold">Update &mdash; September 6, 2014</span>
                        <br>
                        With version 2 of the Leap Motion software in Linux Mint 13, I was having trouble with dependencies when trying to run the Leap Motion visualizer. I just updated to Linux Mint 17 to solve the problem.
                        <br><br>
                        In versions 1.2 and higher, you need to configure your Leap Motion config.json file and add <code>"websockets_allow_remote": true</code>
                        <br>
                        At the time of this writing, the file is stored in these locations:
                        
                            <ul><li>Linux: </li></ul> <code>~/.Leap\ Motion/config.json</code>
                            <ul><li>Windows: </li></ul> <code>%AppData%\Roaming\Leap Motion\config.json</code>
                            <ul><li>Mac: </li></ul><code>~/Library/Application\ Support/Leap\ Motion/config.json</code>
                       
                        Also, make sure that your firewall settings allow you to receive the Leap Motion data on port 6437.
                    </p>
                  <br>
                  <p>
                  If the Leap daemon needs to be restarted, type in 
                       
                            
            <ul><li>Linux: </li></ul> <code>sudo service leapd restart</code>
                           
            <ul><li>Windows in Administrator mode: </li></ul><code>net stop LeapService <br>net start LeapService</code>
                           
            <ul><li>Mac: </li></ul><code>sudo launchctl unload /Library/LaunchDaemons/com.leapmotion.leapd.plist
                               <br><br>sudo launchctl load /Library/LaunchDaemons/com.leapmotion.leapd.plist</code>
                        
                  To run the Leap Control Panel in Linux, type in
                  <code>LeapControlPanel</code>
                  
                  </p>
</div>
            </div>
            
            
            
        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>
</body>

</html>
<?php include( '../../includes/compress.php'); ?>