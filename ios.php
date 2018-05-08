<?php
$ionic_folder = $argv[1];
$unity_folder = $argv[2];

//IONIC FILES
echo "• Ionic files replacing started... \n";

//unityARCaller
if (file_exists($ionic_folder . '/Plugins/unityARCaller/unityARCaller.m')) {
	copy("unityARCaller.m", $ionic_folder . '/Plugins/unityARCaller/unityARCaller.m');
	if (copy("unityARCaller.m", $ionic_folder . '/Plugins/unityARCaller/unityARCaller.m')) {
		echo "• unityARCaller.m changed... \n";
	}
}

// AppDelegate.mm
if (file_exists($ionic_folder . "/Classes/AppDelegate.m")) {
	rename($ionic_folder . "/Classes/AppDelegate.m", $ionic_folder . "/Classes/AppDelegate.mm");
	echo "• AppDelegate.m renamed to AppDelegate.mm... \n";
	copy("AppDelegate.mm", $ionic_folder . '/Classes/AppDelegate.mm');
	if (copy("AppDelegate.mm", $ionic_folder . '/Classes/AppDelegate.mm')) {
		echo "• AppDelegate.mm changed... \n";
	}
}

// AppDelegate.h
if (file_exists($ionic_folder . "/Classes/AppDelegate.h")) {
	copy("AppDelegate.h", $ionic_folder . '/Classes/AppDelegate.h');
	if (copy("AppDelegate.h", $ionic_folder . '/Classes/AppDelegate.h')) {
		echo "• AppDelegate.h changed... \n";
	}
}

// main.mm
if (file_exists($ionic_folder . "/main.m")) {
	rename($ionic_folder . "/main.m", $ionic_folder . "/main.mm");
	echo "• main.m renamed to main.mm... \n";
	copy("main.mm", $ionic_folder . '/main.mm');
	if (copy("main.mm", $ionic_folder . '/main.mm')) {
		echo "• main.mm changed... \n";
	}
}

// UNITY
echo "• Unity files replacing started... \n";

// UnityAppController.h
if (file_exists($unity_folder . '/Classes/UnityAppController.h')) {
	copy("UnityAppController.h", $unity_folder . '/Classes/UnityAppController.h');
	if (copy("UnityAppController.h", $unity_folder . '/Classes/UnityAppController.h')) {
		echo "• UnityAppController.h changed... \n";
	}
}

// UnityAppController.mm
if (file_exists($unity_folder . '/Classes/UnityAppController.mm')) {
	copy("UnityAppController.mm", $unity_folder . '/Classes/UnityAppController.mm');
	if (copy("UnityAppController.mm", $unity_folder . '/Classes/UnityAppController.mm')) {
		echo "• UnityAppController.mm changed... \n";
	}
}
