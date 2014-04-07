<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Portal Teknik Informatika - UNRIYO</title>
	<link rel="shortcut icon" type="image/ico" href="images/favicons.ico" />
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
	<link rel="stylesheet" type="text/css" href="css/ext-theme-neptune/ext-theme-neptune-all-debug.css"/>
	<script type="text/javascript" src="ext-all.js"></script>
    <script type="text/javascript">
        Ext.Loader.setPath({
            'Ext.ux.desktop': 'js',
            MyDesktop: ''
        });

        Ext.require('MyDesktop.App');

        var myDesktopApp;
        Ext.onReady(function () {
            myDesktopApp = new MyDesktop.App();
        });
    </script>
	<script type="text/javascript" src="Jadwal.js"></script>
	<script type="text/javascript" src="Berita.js"></script>
</head>
<body>
</body>
</html>
