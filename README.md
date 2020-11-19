# Firebase-Push-Notification
Simple PHP script to Send Push notification to Android Devices via Firebase

This script is used in my Android application and I extracted it from that.
## How to use
1. Download ZIP file or clone it to your devices/servers.
2. Create a firebase project and connect it to application with your own *google-services.json* file.
3. Go to *config.php* and change your information following:
	- Database information
	- Firebase Authentication Key. You can get it here: `https://console.firebase.google.com/project/{project_name}/settings/cloudmessaging`
4. Execute *createdb.php* to create your database.
5. Add to your Android source code like this [example.java](https://github.com/hzhoanglee/Firebase-Push-Notification/blob/main/examples/example.java "example.java").
6. Open your app and refresh the MySQL table if there is any change.
## Usage
1. Via form.html
2. Via GET: `push.php?title='Your_Title_here'&message='Your_message_herer'`
