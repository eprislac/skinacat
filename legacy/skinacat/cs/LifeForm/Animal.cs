using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LifeFormCS {
	public class Animal : LifeForm {
		public Animal( int _id )
			:base( _id ) {
			this._construct( _id );
			this._kingdom = "Animalia";
		}
	}
}
