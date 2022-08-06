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
    public partial class CatPlatforms : ContentPage
    {
        public CatPlatforms()
        {
            InitializeComponent();
        }

        private void accountbt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new NavigationPage(new Account());

        }

        private void myOrderbt_Clicked(object sender, EventArgs e)
        {

        }



        private void homebt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new MainPage();

        }

        private void catbt_Clicked(object sender, EventArgs e)
        {
            App.Current.MainPage = new NavigationPage(new TabbedCatalogue());
        }
    }
}