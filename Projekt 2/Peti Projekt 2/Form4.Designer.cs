
namespace Peti_Projekt_2
{
    partial class Form4
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.rb1 = new System.Windows.Forms.RadioButton();
            this.rb2 = new System.Windows.Forms.RadioButton();
            this.rb3 = new System.Windows.Forms.RadioButton();
            this.rb4 = new System.Windows.Forms.RadioButton();
            this.rb5 = new System.Windows.Forms.RadioButton();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.cbClean = new System.Windows.Forms.CheckBox();
            this.lblService = new System.Windows.Forms.Label();
            this.lblMoney = new System.Windows.Forms.Label();
            this.btnOrder = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.list2 = new System.Windows.Forms.ListView();
            this.btnCola = new System.Windows.Forms.Button();
            this.btnFanta = new System.Windows.Forms.Button();
            this.btnSprite = new System.Windows.Forms.Button();
            this.btnTea = new System.Windows.Forms.Button();
            this.btnWater = new System.Windows.Forms.Button();
            this.btnSand = new System.Windows.Forms.Button();
            this.btnHamburger = new System.Windows.Forms.Button();
            this.btnPizza = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // rb1
            // 
            this.rb1.AutoSize = true;
            this.rb1.Location = new System.Drawing.Point(6, 19);
            this.rb1.Name = "rb1";
            this.rb1.Size = new System.Drawing.Size(85, 17);
            this.rb1.TabIndex = 6;
            this.rb1.TabStop = true;
            this.rb1.Text = "radioButton1";
            this.rb1.UseVisualStyleBackColor = true;
            this.rb1.Visible = false;
            this.rb1.CheckedChanged += new System.EventHandler(this.rb1_CheckedChanged);
            // 
            // rb2
            // 
            this.rb2.AutoSize = true;
            this.rb2.Location = new System.Drawing.Point(97, 19);
            this.rb2.Name = "rb2";
            this.rb2.Size = new System.Drawing.Size(85, 17);
            this.rb2.TabIndex = 7;
            this.rb2.TabStop = true;
            this.rb2.Text = "radioButton2";
            this.rb2.UseVisualStyleBackColor = true;
            this.rb2.Visible = false;
            this.rb2.CheckedChanged += new System.EventHandler(this.rb2_CheckedChanged);
            // 
            // rb3
            // 
            this.rb3.AutoSize = true;
            this.rb3.Location = new System.Drawing.Point(188, 19);
            this.rb3.Name = "rb3";
            this.rb3.Size = new System.Drawing.Size(85, 17);
            this.rb3.TabIndex = 8;
            this.rb3.TabStop = true;
            this.rb3.Text = "radioButton3";
            this.rb3.UseVisualStyleBackColor = true;
            this.rb3.Visible = false;
            this.rb3.CheckedChanged += new System.EventHandler(this.rb3_CheckedChanged);
            // 
            // rb4
            // 
            this.rb4.AutoSize = true;
            this.rb4.Location = new System.Drawing.Point(279, 19);
            this.rb4.Name = "rb4";
            this.rb4.Size = new System.Drawing.Size(85, 17);
            this.rb4.TabIndex = 9;
            this.rb4.TabStop = true;
            this.rb4.Text = "radioButton4";
            this.rb4.UseVisualStyleBackColor = true;
            this.rb4.Visible = false;
            this.rb4.CheckedChanged += new System.EventHandler(this.rb4_CheckedChanged);
            // 
            // rb5
            // 
            this.rb5.AutoSize = true;
            this.rb5.Location = new System.Drawing.Point(370, 19);
            this.rb5.Name = "rb5";
            this.rb5.Size = new System.Drawing.Size(85, 17);
            this.rb5.TabIndex = 10;
            this.rb5.TabStop = true;
            this.rb5.Text = "radioButton5";
            this.rb5.UseVisualStyleBackColor = true;
            this.rb5.Visible = false;
            this.rb5.CheckedChanged += new System.EventHandler(this.rb5_CheckedChanged);
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.rb1);
            this.groupBox1.Controls.Add(this.rb5);
            this.groupBox1.Controls.Add(this.rb2);
            this.groupBox1.Controls.Add(this.rb4);
            this.groupBox1.Controls.Add(this.rb3);
            this.groupBox1.Location = new System.Drawing.Point(12, 12);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(669, 54);
            this.groupBox1.TabIndex = 11;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Válasszon szobát";
            this.groupBox1.Enter += new System.EventHandler(this.groupBox1_Enter);
            // 
            // cbClean
            // 
            this.cbClean.AutoSize = true;
            this.cbClean.Location = new System.Drawing.Point(347, 72);
            this.cbClean.Name = "cbClean";
            this.cbClean.Size = new System.Drawing.Size(101, 17);
            this.cbClean.TabIndex = 12;
            this.cbClean.Text = "Szoba takarítás";
            this.cbClean.UseVisualStyleBackColor = true;
            this.cbClean.CheckedChanged += new System.EventHandler(this.checkBox1_CheckedChanged);
            // 
            // lblService
            // 
            this.lblService.AutoSize = true;
            this.lblService.Location = new System.Drawing.Point(12, 72);
            this.lblService.Name = "lblService";
            this.lblService.Size = new System.Drawing.Size(52, 13);
            this.lblService.TabIndex = 15;
            this.lblService.Text = "Rendelés";
            // 
            // lblMoney
            // 
            this.lblMoney.AutoSize = true;
            this.lblMoney.Location = new System.Drawing.Point(611, 403);
            this.lblMoney.Name = "lblMoney";
            this.lblMoney.Size = new System.Drawing.Size(13, 13);
            this.lblMoney.TabIndex = 17;
            this.lblMoney.Text = "0";
            // 
            // btnOrder
            // 
            this.btnOrder.Location = new System.Drawing.Point(712, 398);
            this.btnOrder.Name = "btnOrder";
            this.btnOrder.Size = new System.Drawing.Size(75, 23);
            this.btnOrder.TabIndex = 18;
            this.btnOrder.Text = "Rendelés";
            this.btnOrder.UseVisualStyleBackColor = true;
            this.btnOrder.Click += new System.EventHandler(this.btnOrder_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(550, 76);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(100, 13);
            this.label1.TabIndex = 19;
            this.label1.Text = "Választott termékek";
            // 
            // list2
            // 
            this.list2.Activation = System.Windows.Forms.ItemActivation.OneClick;
            this.list2.FullRowSelect = true;
            this.list2.GridLines = true;
            this.list2.HideSelection = false;
            this.list2.Location = new System.Drawing.Point(464, 99);
            this.list2.Name = "list2";
            this.list2.Size = new System.Drawing.Size(265, 292);
            this.list2.TabIndex = 20;
            this.list2.UseCompatibleStateImageBehavior = false;
            this.list2.View = System.Windows.Forms.View.List;
            // 
            // btnCola
            // 
            this.btnCola.Location = new System.Drawing.Point(12, 99);
            this.btnCola.Name = "btnCola";
            this.btnCola.Size = new System.Drawing.Size(130, 28);
            this.btnCola.TabIndex = 21;
            this.btnCola.Text = "Coca Cola 5$";
            this.btnCola.UseVisualStyleBackColor = true;
            this.btnCola.Click += new System.EventHandler(this.btnCola_Click);
            // 
            // btnFanta
            // 
            this.btnFanta.Location = new System.Drawing.Point(12, 133);
            this.btnFanta.Name = "btnFanta";
            this.btnFanta.Size = new System.Drawing.Size(130, 28);
            this.btnFanta.TabIndex = 22;
            this.btnFanta.Text = "Fanta 5$";
            this.btnFanta.UseVisualStyleBackColor = true;
            this.btnFanta.Click += new System.EventHandler(this.btnFanta_Click);
            // 
            // btnSprite
            // 
            this.btnSprite.Location = new System.Drawing.Point(12, 167);
            this.btnSprite.Name = "btnSprite";
            this.btnSprite.Size = new System.Drawing.Size(130, 28);
            this.btnSprite.TabIndex = 23;
            this.btnSprite.Text = "Sprite 5$";
            this.btnSprite.UseVisualStyleBackColor = true;
            this.btnSprite.Click += new System.EventHandler(this.btnSprite_Click);
            // 
            // btnTea
            // 
            this.btnTea.Location = new System.Drawing.Point(12, 201);
            this.btnTea.Name = "btnTea";
            this.btnTea.Size = new System.Drawing.Size(130, 28);
            this.btnTea.TabIndex = 24;
            this.btnTea.Text = "Ice Tea 5$";
            this.btnTea.UseVisualStyleBackColor = true;
            this.btnTea.Click += new System.EventHandler(this.btnTea_Click);
            // 
            // btnWater
            // 
            this.btnWater.Location = new System.Drawing.Point(12, 235);
            this.btnWater.Name = "btnWater";
            this.btnWater.Size = new System.Drawing.Size(130, 28);
            this.btnWater.TabIndex = 25;
            this.btnWater.Text = "Water 5$";
            this.btnWater.UseVisualStyleBackColor = true;
            this.btnWater.Click += new System.EventHandler(this.btnWater_Click);
            // 
            // btnSand
            // 
            this.btnSand.Location = new System.Drawing.Point(12, 269);
            this.btnSand.Name = "btnSand";
            this.btnSand.Size = new System.Drawing.Size(130, 28);
            this.btnSand.TabIndex = 26;
            this.btnSand.Text = "Szenvics 10$";
            this.btnSand.UseVisualStyleBackColor = true;
            this.btnSand.Click += new System.EventHandler(this.btnSand_Click);
            // 
            // btnHamburger
            // 
            this.btnHamburger.Location = new System.Drawing.Point(12, 303);
            this.btnHamburger.Name = "btnHamburger";
            this.btnHamburger.Size = new System.Drawing.Size(130, 28);
            this.btnHamburger.TabIndex = 27;
            this.btnHamburger.Text = "Hamburger 10$";
            this.btnHamburger.UseVisualStyleBackColor = true;
            this.btnHamburger.Click += new System.EventHandler(this.btnHamburger_Click);
            // 
            // btnPizza
            // 
            this.btnPizza.Location = new System.Drawing.Point(12, 337);
            this.btnPizza.Name = "btnPizza";
            this.btnPizza.Size = new System.Drawing.Size(130, 28);
            this.btnPizza.TabIndex = 28;
            this.btnPizza.Text = "Pizza 10$";
            this.btnPizza.UseVisualStyleBackColor = true;
            this.btnPizza.Click += new System.EventHandler(this.btnPizza_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(678, 403);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(13, 13);
            this.label2.TabIndex = 29;
            this.label2.Text = "$";
            // 
            // Form4
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.btnPizza);
            this.Controls.Add(this.btnHamburger);
            this.Controls.Add(this.btnSand);
            this.Controls.Add(this.btnWater);
            this.Controls.Add(this.btnTea);
            this.Controls.Add(this.btnSprite);
            this.Controls.Add(this.btnFanta);
            this.Controls.Add(this.btnCola);
            this.Controls.Add(this.list2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnOrder);
            this.Controls.Add(this.lblMoney);
            this.Controls.Add(this.lblService);
            this.Controls.Add(this.cbClean);
            this.Controls.Add(this.groupBox1);
            this.Name = "Form4";
            this.Text = "Form4";
            this.Load += new System.EventHandler(this.Form4_Load);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.RadioButton rb1;
        private System.Windows.Forms.RadioButton rb2;
        private System.Windows.Forms.RadioButton rb3;
        private System.Windows.Forms.RadioButton rb4;
        private System.Windows.Forms.RadioButton rb5;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.CheckBox cbClean;
        private System.Windows.Forms.Label lblService;
        private System.Windows.Forms.Label lblMoney;
        private System.Windows.Forms.Button btnOrder;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ListView list2;
        private System.Windows.Forms.Button btnCola;
        private System.Windows.Forms.Button btnFanta;
        private System.Windows.Forms.Button btnSprite;
        private System.Windows.Forms.Button btnTea;
        private System.Windows.Forms.Button btnWater;
        private System.Windows.Forms.Button btnSand;
        private System.Windows.Forms.Button btnHamburger;
        private System.Windows.Forms.Button btnPizza;
        private System.Windows.Forms.Label label2;
    }
}