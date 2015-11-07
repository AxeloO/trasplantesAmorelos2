package com.example.usuario.trasplantesmorelos;

import android.app.ActionBar;
import android.app.Activity;
import android.app.LocalActivityManager;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.TabHost;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends Activity {
    TabHost tabhost;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        tabhost = (TabHost) findViewById(R.id.tabHost);


        TabHost.TabSpec tab1 = tabhost.newTabSpec("tab1");  //aspectos de cada Tab (pestaña)
        TabHost.TabSpec tab2 = tabhost.newTabSpec("tab2");
        TabHost.TabSpec tab3 = tabhost.newTabSpec("tab3");
        tab1.setIndicator("Inicio");    //qué queremos que aparezca en las pestañas
        tab2.setIndicator("Mapa");
        tab3.setIndicator("Donaciones");
        LocalActivityManager manejador = new LocalActivityManager(this, false);
        manejador.dispatchCreate(savedInstanceState);
        tabhost.setup(manejador);

        tab1.setContent(new Intent(this, Inicio.class));
        tab2.setContent(new Intent(this, Lugares.class));
        tab3.setContent(new Intent(this, Donacion.class));


        tabhost.addTab(tab1); //añadimos los tabs ya programados
        tabhost.addTab(tab2);
        tabhost.addTab(tab3);


    //  tabhost.getTabWidget().getChildAt(0).setBackgroundColor(Color.rgb(112, 159, 212));
      //  tabhost.getTabWidget().getChildAt(1).setBackgroundColor(Color.rgb(195, 121, 218));
        //tabhost.getTabWidget().getChildAt(2).setBackgroundColor(Color.rgb(138, 246, 111));

    }

    private void setSelectedTabColor() {
        for(int i=0;i<3;i++)
        {
            if(tabhost.getTabWidget().getChildAt(i).isFocused())
            tabhost.getTabWidget().getChildAt(i).setBackgroundColor(Color.RED);
            else
            tabhost.getTabWidget().getChildAt(tabhost.getCurrentTab()).setBackgroundColor(Color.WHITE);
        }


    }

    public void onTabChanged(String tabId) {
        Toast.makeText(getBaseContext(), "ejecutar", Toast.LENGTH_LONG).show();
        setSelectedTabColor();
    }


}
