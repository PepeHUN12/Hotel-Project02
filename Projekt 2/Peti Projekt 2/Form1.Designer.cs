
namespace Peti_Projekt_2
{
    partial class Form1
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.btnBill = new System.Windows.Forms.Button();
            this.btnRoomService = new System.Windows.Forms.Button();
            this.btnDrinks = new System.Windows.Forms.Button();
            this.btnActivities = new System.Windows.Forms.Button();
            this.btnCalendar = new System.Windows.Forms.Button();
            this.btnWeather = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.btnLogin = new System.Windows.Forms.Button();
            this.btnLogout = new System.Windows.Forms.Button();
            this.btnExit = new System.Windows.Forms.Button();
            this.btnHunForm = new System.Windows.Forms.Button();
            this.btnEngForm = new System.Windows.Forms.Button();
            this.backgroundWorker1 = new System.ComponentModel.BackgroundWorker();
            this.lblGuest = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.lblDate = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // btnBill
            // 
            this.btnBill.Location = new System.Drawing.Point(150, 119);
            this.btnBill.Name = "btnBill";
            this.btnBill.Size = new System.Drawing.Size(103, 68);
            this.btnBill.TabIndex = 0;
            this.btnBill.Text = "Számla megtekintése";
            this.btnBill.UseVisualStyleBackColor = true;
            this.btnBill.Click += new System.EventHandler(this.btnBill_Click);
            // 
            // btnRoomService
            // 
            this.btnRoomService.Location = new System.Drawing.Point(328, 119);
            this.btnRoomService.Name = "btnRoomService";
            this.btnRoomService.Size = new System.Drawing.Size(103, 68);
            this.btnRoomService.TabIndex = 1;
            this.btnRoomService.Text = "Szobaszervíz / Rendelés";
            this.btnRoomService.UseVisualStyleBackColor = true;
            this.btnRoomService.Click += new System.EventHandler(this.btnRoomService_Click);
            // 
            // btnDrinks
            // 
            this.btnDrinks.Enabled = false;
            this.btnDrinks.Location = new System.Drawing.Point(498, 119);
            this.btnDrinks.Name = "btnDrinks";
            this.btnDrinks.Size = new System.Drawing.Size(103, 68);
            this.btnDrinks.TabIndex = 2;
            this.btnDrinks.Text = "ASD";
            this.btnDrinks.UseVisualStyleBackColor = true;
            this.btnDrinks.Visible = false;
            this.btnDrinks.Click += new System.EventHandler(this.btnDrinks_Click);
            // 
            // btnActivities
            // 
            this.btnActivities.Enabled = false;
            this.btnActivities.Location = new System.Drawing.Point(150, 279);
            this.btnActivities.Name = "btnActivities";
            this.btnActivities.Size = new System.Drawing.Size(103, 68);
            this.btnActivities.TabIndex = 3;
            this.btnActivities.Text = "Szabadidős tevékenységek";
            this.btnActivities.UseVisualStyleBackColor = true;
            this.btnActivities.Visible = false;
            // 
            // btnCalendar
            // 
            this.btnCalendar.Enabled = false;
            this.btnCalendar.Location = new System.Drawing.Point(328, 279);
            this.btnCalendar.Name = "btnCalendar";
            this.btnCalendar.Size = new System.Drawing.Size(103, 68);
            this.btnCalendar.TabIndex = 4;
            this.btnCalendar.Text = "Naptár";
            this.btnCalendar.UseVisualStyleBackColor = true;
            this.btnCalendar.Visible = false;
            // 
            // btnWeather
            // 
            this.btnWeather.Enabled = false;
            this.btnWeather.Location = new System.Drawing.Point(498, 279);
            this.btnWeather.Name = "btnWeather";
            this.btnWeather.Size = new System.Drawing.Size(103, 68);
            this.btnWeather.TabIndex = 5;
            this.btnWeather.Text = "Időjárás";
            this.btnWeather.UseVisualStyleBackColor = true;
            this.btnWeather.Visible = false;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(13, 13);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(102, 13);
            this.label1.TabIndex = 6;
            this.label1.Text = "Bejelentkezve mint: ";
            // 
            // btnLogin
            // 
            this.btnLogin.Location = new System.Drawing.Point(16, 489);
            this.btnLogin.Name = "btnLogin";
            this.btnLogin.Size = new System.Drawing.Size(90, 23);
            this.btnLogin.TabIndex = 7;
            this.btnLogin.Text = "Bejelentkezés";
            this.btnLogin.UseVisualStyleBackColor = true;
            this.btnLogin.Click += new System.EventHandler(this.btnLogin_Click);
            // 
            // btnLogout
            // 
            this.btnLogout.Enabled = false;
            this.btnLogout.Location = new System.Drawing.Point(498, 489);
            this.btnLogout.Name = "btnLogout";
            this.btnLogout.Size = new System.Drawing.Size(90, 23);
            this.btnLogout.TabIndex = 8;
            this.btnLogout.Text = "Kijelentkezés";
            this.btnLogout.UseVisualStyleBackColor = true;
            this.btnLogout.Click += new System.EventHandler(this.btnLogout_Click);
            // 
            // btnExit
            // 
            this.btnExit.Enabled = false;
            this.btnExit.Location = new System.Drawing.Point(594, 489);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(90, 23);
            this.btnExit.TabIndex = 9;
            this.btnExit.Text = "Kilépés";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Visible = false;
            // 
            // btnHunForm
            // 
            this.btnHunForm.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("btnHunForm.BackgroundImage")));
            this.btnHunForm.Location = new System.Drawing.Point(616, 4);
            this.btnHunForm.Name = "btnHunForm";
            this.btnHunForm.Size = new System.Drawing.Size(31, 32);
            this.btnHunForm.TabIndex = 10;
            this.btnHunForm.UseVisualStyleBackColor = true;
            this.btnHunForm.Click += new System.EventHandler(this.btnHunForm_Click);
            // 
            // btnEngForm
            // 
            this.btnEngForm.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("btnEngForm.BackgroundImage")));
            this.btnEngForm.Location = new System.Drawing.Point(653, 4);
            this.btnEngForm.Name = "btnEngForm";
            this.btnEngForm.Size = new System.Drawing.Size(31, 32);
            this.btnEngForm.TabIndex = 11;
            this.btnEngForm.UseVisualStyleBackColor = true;
            this.btnEngForm.Click += new System.EventHandler(this.btnEngForm_Click);
            // 
            // lblGuest
            // 
            this.lblGuest.AutoSize = true;
            this.lblGuest.Location = new System.Drawing.Point(177, 13);
            this.lblGuest.Name = "lblGuest";
            this.lblGuest.Size = new System.Drawing.Size(106, 13);
            this.lblGuest.TabIndex = 12;
            this.lblGuest.Text = "(vendég e-mail címe)";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(498, 69);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(0, 13);
            this.label3.TabIndex = 13;
            // 
            // lblDate
            // 
            this.lblDate.AutoSize = true;
            this.lblDate.Location = new System.Drawing.Point(13, 42);
            this.lblDate.Name = "lblDate";
            this.lblDate.Size = new System.Drawing.Size(0, 13);
            this.lblDate.TabIndex = 14;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(715, 524);
            this.Controls.Add(this.lblDate);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.lblGuest);
            this.Controls.Add(this.btnEngForm);
            this.Controls.Add(this.btnHunForm);
            this.Controls.Add(this.btnExit);
            this.Controls.Add(this.btnLogout);
            this.Controls.Add(this.btnLogin);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnWeather);
            this.Controls.Add(this.btnCalendar);
            this.Controls.Add(this.btnActivities);
            this.Controls.Add(this.btnDrinks);
            this.Controls.Add(this.btnRoomService);
            this.Controls.Add(this.btnBill);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnBill;
        private System.Windows.Forms.Button btnRoomService;
        private System.Windows.Forms.Button btnDrinks;
        private System.Windows.Forms.Button btnActivities;
        private System.Windows.Forms.Button btnCalendar;
        private System.Windows.Forms.Button btnWeather;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btnLogin;
        private System.Windows.Forms.Button btnLogout;
        private System.Windows.Forms.Button btnExit;
        private System.Windows.Forms.Button btnEngForm;
        private System.ComponentModel.BackgroundWorker backgroundWorker1;
        private System.Windows.Forms.Label lblGuest;
        private System.Windows.Forms.Button btnHunForm;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label lblDate;
    }
}

