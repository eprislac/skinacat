//
// LifeForm.h
//

#include "ILifeForm.h"
#include <iostream>
#include <string>

using namespace std;

// Abstract Class
class ILifeForm {
	public:
		void _contsruct( int _id );
	protected:
		int _id;
		string _kingdom;
		string _phylum;
		string _class;
		string _order;
		string _family;
		string _genus;
		string _species;
		
}
//Base Class
class LifeForm : public ILifeForm{
	public:
		LifeForm( int _id )
		{
			this->_construct( _id );
		}
		~LifeForm();
		
//ILifeForm implementation
	public:
		virtual void _contsruct( int _id ) {
			this->_id = _id;
		}
		
		virtual void set_kingdom( string _kingdom ) {
			this->_kingdom = _kingdom;
		}
		
		virtual string get_kingdom() {
			return this->_kingdom;
		}
		
		virtual void set_phylum( string _phylum ) {
			this->_phylum = _phylum;
		}
		
		virtual string get_phylum() {
			return this->_phylum;
		}
		
		virtual void set_class( string _class ) {
			this->_class = _class;
		}
		
		virtual string get_class() {
			return this->_class;
		}
		
		virtual void set_order( string _order ) {
			this->_order = _order;
		}
		
		virtual string get_order() {
			return this->_order;
		}
		
		virtual void set_family( string _family ) {
			this->_family = _family;
		}
		
		virtual string get_family() {
			return this->_family;
		}
		
		virtual void set_genus( string _genus ) {
			this->_genus = _genus;
		}
		
		virtual string get_genus() {
			return this->_genus;
		}
		
		virtual void set_species( string _species ) {
			this->_species = _species;
		}
		
		virtual string get_species() {
			return this->_species;
		}
		
};

class Animal : public LifeForm {
	public:
		Animal( int _id ) : LifeForm( _id ) {
			this->_construct( _id );
			this->set_kingdom( "Animal" );
		}
};

class Vertebrate : public Animal {
	public:
		Vertebrate( int _id ) : Animal( _id ) {
			this->_construct( _id );
			this->set_phylum( "Chordata" );
		}
}
;
class Mammal : public Vertebrate {
	public:
		Mammal( int _id ):Vertebrate( _id ) {
			this->_construct( _id );
			this->set_phylum( "Mammalia" );
		}
};

class Reptile : public Vertebrate {
	public:
		Reptile( int _id ) : Vertebrate( _id ) {
			this->_construct( _id );
			this->set_phylum( "Reptilia" );
		}
};

class Bird : public Vertebrate {
	public:
		Bird( int _id ) : Vertebrate( _id ) {
			this->_construct( _id );
			this->set_phylum( "Avia" );
		}
};
