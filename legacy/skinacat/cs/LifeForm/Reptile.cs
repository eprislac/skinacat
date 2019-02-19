using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LifeFormCS {
	public class Reptile : Vertebrate {
		public Reptile( int _id ) 
			:base( _id ) {
			this._construct( _id );
			this._class = "Reptilia";
		}
	}
}
