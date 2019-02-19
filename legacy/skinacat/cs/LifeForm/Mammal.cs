using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LifeFormCS {
	public class Mammal : Vertebrate {
		public Mammal( int _id ) 
			:base( _id ) {
			this._construct( _id );
			this._class = "Mammalia";
		}
	}
}
