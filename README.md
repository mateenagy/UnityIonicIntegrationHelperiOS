# UnityIonicIntegrationHelperiOS

Helper script for Unity-Ionic integration.

  

## Usage

- This script made for this repo: https://github.com/yasirkula/UnityIonicIntegration

- Before you run the script you need to import every Unity file and folder to Xcode as in the repo.

- Open Terminal and go to UnityIonicIntegrationHelperiOS folder.

- Run `php ios.php ionic_build_folder unity_build_folder`

- Ionic build folder must be the folder the ionic_project/platform/ios/ionic_project folder

- Rename main.m to main.mm
- Delete main.mm from Unity folder

- Rename AppDelegate.m to AppDelegate.mm
- Yout still need to do the settings inside Xcode this script only rewrite the files

P.S: The Vuforia is included in the code so if you don't use it you can comment it out. Maybe I will upgrade it in the future where you can choose.
