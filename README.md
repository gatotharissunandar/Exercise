# Exercise
Exercise1
Exercise 1:
You have been running your shop for a long time, and have a list of 1 Million blacklisted name and phone number. Each line is one word(name), followed by space, then the phone number.

Example blacklist.txt:
============================
Andi 1341441
Melisa 8565467
Aslam 2908345
============================

You want to build an API server that receive the name and phone number as an input, then output boolean whether this name and phone number is in the blacklist. How would you write these two functions to optimize the latency for each API call (no need to write an API server):

- initialize(blacklist)
This function takes string input, which is the file name of the blacklist you have, and called when the API server is starting.

-check_blacklist(name, phone_number)
This function takes 2 arguments, name(string) and phone number(int). This function is called whenever the API is called, and return boolean the input name and phone number is in the blacklist.
