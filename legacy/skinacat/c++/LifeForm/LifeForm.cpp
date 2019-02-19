//
// LifeForm.cpp
//

#include "LifeForm.h"
#include <iostream>
#include <string>

using namespace std;

int main() {
	Mammal cat = Mammal(0);
	cout << "A cat belongs to Kingdom " << cat.get_kingdom() << endl;
	cout << "A cat belongs to Phylum " << cat.get_phylum() << endl;
	cout << "A cat belongs to Class " << cat.get_class() << endl;
	cout << "" << endl;
	Reptile alligator = Reptile(1);
	cout << "An alligator belongs to Kingdom " << alligator.get_kingdom() << endl;
	cout << "An alligator belongs to Phylum " << alligator.get_phylum() << endl;
	cout << "An alligator belongs to Class " << alligator.get_class() << endl;
	cout << "" << endl;
	Bird parakeet = Bird(2);
	cout << "A bird belongs to Kingdom " << parakeet.get_kingdom() << endl;
	cout << "A bird belongs to Phylum " << parakeet.get_phylum() << endl;
	cout << "A bird belongs to Class " << parakeet.get_class() << endl;
	cout << "" << endl;
	return 0;
}

