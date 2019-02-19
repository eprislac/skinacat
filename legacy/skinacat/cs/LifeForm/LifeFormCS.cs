using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using LifeForm;

namespace LifeFormCS {
    class Program {
        static void Main(string[] args) {
        	Reptile alligator = new Reptile(0);
            Console.WriteLine("An alligator belongs to the kingdom " + alligator.get_kingdom());
            Console.WriteLine("An alligator belongs to the phylum " + alligator.get_phylum());
            Console.WriteLine("An alligator belongs to the class " + alligator.get_class());
            Console.WriteLine("Press any key to continue...");
            Console.ReadKey(true);
            Bird parakeet = new Bird(1);
            Console.WriteLine("A parakeet belongs to the kingdom " + parakeet.get_kingdom());
            Console.WriteLine("A parakeet belongs to the phylum " + parakeet.get_phylum());
            Console.WriteLine("A parakeet belongs to the class " + parakeet.get_class());
            Console.WriteLine("Press any key to continue...");
            Console.ReadKey(true);
            Mammal cat = new Mammal(2);
            Console.WriteLine("A cat belongs to the kingdom " + cat.get_kingdom());
            Console.WriteLine("A cat belongs to the phylum " + cat.get_phylum());
            Console.WriteLine("A cat belongs to the class " + cat.get_class());
            Console.WriteLine("Press any key to continue...");
            Console.ReadKey(true);
        }
    }
}
