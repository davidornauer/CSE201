using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Project201
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Account : ContentPage
    {
        List<string> list = new List<string> { "Contact information", "Help", "About" };

        public Account()
        {
            InitializeComponent();

            
        }

        /*
  * This method will change main page to account page when the user clicked account button
  */
        private void accountbt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new NavigationPage(new Account());

        }

        /*
         * This method will change main page to order page when the user clicked my order button
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

        /*
         * This method will push current page to about page and user can go back to previous page
         */
        private async void about_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new AccountAboutPage());
        }

        /*
         * This method will push current page to help page and user can go back to previous page
         */
        private async void help_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new AccountHelpPage());
        }

        /*
         * This method will push current page to contact page and user can go back to previous page
         */
        private void contact_Clicked(object sender, EventArgs e)
        {

        }
    }
}