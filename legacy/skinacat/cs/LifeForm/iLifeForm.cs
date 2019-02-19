using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LifeFormCS {
	
	/// <summary>
    /// Interface iLifeForm determines the structure of LifeForm and sets a list
    /// of methods that must be satisfied by classes inheriting from LifeForm. 
    /// </summary>
	public interface iLifeForm
	{
        void _construct(int _id);
        void set_kingdom(string _kingdom);
        string get_kingdom();
        void set_phylum(string _phylum);
        string get_phylum();
        void set_class(string _class);
        string get_class();
        void set_order(string _order);
        string get_order();
        void set_family(string _family);
        string get_family();
        void set_genus(string _genus);
        string get_genus();
        void set_species(string _species);
        string get_species();
	}
	
}
