using System;
using NUnit.Framework;
using LifeFormCS;

namespace LifeFormCS{
	[TestFixture]
	public class Program{
		
		static void Main(string[] args){
			string C = args[0];
			string k = args[1];
			string p = args[2];
			string c = args[3]; 
			int passed = 0;
			int failed = 0;
			int total = 0;
			
			LifeForm l = new LifeForm(0);
			switch (C){
				case "Mammal":
					Mammal cat = new Mammal(1);
					l = cat;
					break;
				case "Reptile":
					Reptile alligator = new Reptile(2);
					l = alligator;
					break;
				case "Bird":
					Bird parakeet = new Bird(3);
					l = parakeet;
					break;
			}
			try{
				HasCorrectKingdom(l,k);
				passed++;
			}
			catch(NUnit.Framework.AssertionException e){
				testFailed(e);
				failed++;
			}
			total ++;
			try{
			 HasCorrectPhylum(l,p);
			 passed++;
			 
			 }
			 catch(NUnit.Framework.AssertionException e){
			 	testFailed(e);
			 	failed++;
			 }
			 total ++;
			 try{
				HasCorrectClass(l,c );
				passed++;
			}
			catch (NUnit.Framework.AssertionException e) {
				testFailed(e);
				failed++;
			}
			total ++;
			Console.WriteLine(total.ToString() + " tests run, " + passed.ToString() + " tests passed, " + failed.ToString() + " tests failed.\nPress any key to continue...");
			Console.ReadKey(true);
		}

		[Test]
		static void HasCorrectKingdom(LifeForm l, string expected){
			Assert.AreEqual( l.get_kingdom() , expected, "HasCorrectKingdom Failed" );
			
		}
		
		[Test]
		static void HasCorrectPhylum(LifeForm l,string expected){
			Assert.AreEqual( l.get_phylum() , expected, "HasCorrectPhylum Failed" );
			
		}
		
		[Test]
		static void HasCorrectClass(LifeForm l,string expected){
			Assert.AreEqual( l.get_class() , expected, "HasCorrectClass Failed" );
			
		}
		
		static void testFailed(NUnit.Framework.AssertionException e){
			Console.WriteLine("Exception caught: " + e);
			
		}
	}
}
