using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Peti_Projekt_2
{
    public partial class Form3 : Form
    {
        string cs = @"server=localhost;userid=root;password=;database=hotel";
        public int guestID { get; set; }
        public Form3(int guestID)
        {
            InitializeComponent();
            using (var con = new MySqlConnection(cs))
            {
                string sql = "SELECT Bill FROM reservations WHERE GuestID ="+ guestID +"";
                con.Open();
                var cmd = new MySqlCommand(sql, con);
                using (MySqlDataReader rdr = cmd.ExecuteReader())
                {
                    if (rdr.HasRows)
                    {
                        int balance = 0;
                        while (rdr.Read())
                        {
                            balance += rdr.GetInt32(0);
                        }
                        lblBalance.Text = "Számla: "+balance.ToString()+" $";
                    }

                }

            }
        }
    }
}
