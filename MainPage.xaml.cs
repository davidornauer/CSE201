using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace Project201
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        /*
          * This method will change main page to account page when the user clicked account button
          */
        private void accountbt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new NavigationPage( new Account());

        }

        /*
         * This method will change main page to my order page when the user clicked my order button
         */
        private void myOrderbt_Clicked(object sender, EventArgs e)
        {

        }


        /*
         * This method will change main page to home page when the user clicked home button
         */
        private void homebt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new MainPage();

        }

        /*
         * This method will change main page to catalogue page when the user clicked catalogue button
         */
        private void catbt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new NavigationPage(new TabbedCatalogue());
        }
    }
}
