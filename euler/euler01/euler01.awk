#!/usr/bin/awk -f
BEGIN{
	num = 0 # declare variables
	sum = 0
	for ( num = 0; num < 1000; num++ ) # utilizes a 'for' loop
	{
		if  (num % 3 == 0 || num % 5 == 0 ) # utilizes an 'if' statement and modulus (%) operator
		{
			sum = sum + num # if num divided by 3 or five has no remainder, add to sum
		}
	}
	print sum # formats the int sum as string (%d) and outputs the answer with a new line following.
} # no need to write an explicit end to the program
