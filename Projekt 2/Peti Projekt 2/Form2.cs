using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace Peti_Projekt_2
{
    public partial class Form2 : Form
    {
        string cs = @"server=localhost;userid=root;password=;database=hotel";
        public Form2()
        {
            InitializeComponent();
            
        }

        private void textEmail_TextChanged(object sender, EventArgs e)
        {

        }

        private void btnLogin2_Click(object sender, EventArgs e)
        {
            string email = textEmail.Text;
            string password = textPassword.Text;
            string sql = "SELECT GuestID, FirstName, LastName FROM Guests WHERE Email = '"+email+"' and Password = '"+password+"' LIMIT 1";


            using (var con = new MySqlConnection(cs))
            {
                con.Open();
                var cmd = new MySqlCommand(sql, con);
                using (MySqlDataReader rdr = cmd.ExecuteReader()) {
                    while (rdr.Read())
                    {
                        lblResult.Text = $"{rdr.GetString(1)}{rdr.GetString(2)}";
                    }
                    
                }
                

            
            }


        }
    }
}
