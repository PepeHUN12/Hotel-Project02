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
    
    public partial class Form4 : Form
    {
        string cs = @"server=localhost;userid=root;password=;database=hotel";
        int room;
        public int guest { get; set; }
        public Form4(int guestID)
        {
            InitializeComponent();
            guest = guestID;
            using (var con = new MySqlConnection(cs))
            {
                string sql = "SELECT RoomID FROM Reservations WHERE GuestID ="+ guestID +"";
                con.Open();
                var cmd = new MySqlCommand(sql, con);
                using (MySqlDataReader rdr = cmd.ExecuteReader())
                {
                    if (rdr.HasRows)
                    {
                        int szam = 0;
                        while (rdr.Read())
                        {
                            switch (szam)
                            {
                                case 0:
                                    rb1.Visible = true;
                                    rb1.Text = rdr.GetString(0);
                                    break;
                                case 1:
                                    rb2.Visible = true;
                                    rb2.Text = rdr.GetString(0);
                                    break;
                                case 2:
                                    rb3.Visible = true;
                                    rb3.Text = rdr.GetString(0);
                                    break;
                                case 3:
                                    rb4.Visible = true;
                                    rb4.Text = rdr.GetString(0);
                                    break;
                                case 4:
                                    rb5.Visible = true;
                                    rb5.Text = rdr.GetString(0);
                                    break;

                                default:
                                    break;
                            }
                            szam++;
                        }
                        
                    }

                }
                con.Close();

            }
        }

        private void dateTimePicker1_ValueChanged(object sender, EventArgs e)
        {

        }

        private void Form4_Load(object sender, EventArgs e)
        {

        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {

        }
        private void btnCola_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnCola.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 5;
            lblMoney.Text = szam.ToString();
        }

        private void btnFanta_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnFanta.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 5;
            lblMoney.Text = szam.ToString();
        }

        private void btnSprite_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnSprite.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 5;
            lblMoney.Text = szam.ToString();
        }

        private void btnTea_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnTea.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 5;
            lblMoney.Text = szam.ToString();
        }

        private void btnWater_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnWater.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 5;
            lblMoney.Text = szam.ToString();
        }

        private void btnSand_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnSand.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 10;
            lblMoney.Text = szam.ToString();
        }

        private void btnHamburger_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnHamburger.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 10;
            lblMoney.Text = szam.ToString();
        }

        private void btnPizza_Click(object sender, EventArgs e)
        {
            list2.Items.Add(btnPizza.Text);
            int szam = int.Parse(lblMoney.Text);
            szam += 10;
            lblMoney.Text = szam.ToString();
        }

        private void btnOrder_Click(object sender, EventArgs e)
        {
            using (var con = new MySqlConnection(cs))
            {

                //lblService.Text = guest.ToString();
                int szam = int.Parse(lblMoney.Text);
                string sql = "UPDATE Reservations SET Bill = Bill + "+szam+" WHERE (GuestID = "+guest+" AND RoomID = "+room+")";
                con.Open();
                var cmd = new MySqlCommand(sql, con);
                using (MySqlDataReader rdr = cmd.ExecuteReader())
                {
                    while (rdr.Read())
                    {

                    }
                }
            }
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {
            
        }

        private void rb1_CheckedChanged(object sender, EventArgs e)
        {
            //lblService.Text = rb1.Text;
            room = int.Parse(rb1.Text);
        }

        private void rb2_CheckedChanged(object sender, EventArgs e)
        {
            //lblService.Text = rb2.Text;
            room = int.Parse(rb2.Text);
        }

        private void rb3_CheckedChanged(object sender, EventArgs e)
        {
            room = int.Parse(rb3.Text);
        }

        private void rb4_CheckedChanged(object sender, EventArgs e)
        {
            room = int.Parse(rb4.Text);
        }

        private void rb5_CheckedChanged(object sender, EventArgs e)
        {
            room = int.Parse(rb5.Text);
        }
    }
}
