# include <iostream>
using namespace std;
int main()
{
	int num; // declare variables
	int sum;
	sum = 0; // set sum to 0
	for ( num = 0; num < 1000; num++ ) //utilizes a 'for' loop
	{
		if ( num % 3 == 0 || num % 5 == 0 ) //utilizes an 'if' statement and modulus (%) operator
			{
				sum = sum + num; // if num divided by 3 or five has no remainder, add to sum 
			}
		
	}
	cout << sum << endl ; // outputs answer with a new line following.
	return 0; // ends program
}

