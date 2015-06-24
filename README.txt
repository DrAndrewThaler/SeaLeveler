This is a basic set of commands to count the number of tweets about sea level rise and then use an arduino Uno with ethernet shield to drive a stepper motor connected to an old-school tide gauge. 

Program comes in two parts: 1) a .php file that must be hosted online which recovers the number of tweets from a specific hashtag and 2) an arduino script to be uploaded to the microcontroller.

This program uses a rough search of twitter, so the total tweet count will never be 100% accurate and is limited by the total numner of tweets twitter returns in a search. The .php code will provide a rough count of how many tweets have been posted about a topic in the last seven days.

Unfortunately, since Twitter updated its API, this code no longer works. 
