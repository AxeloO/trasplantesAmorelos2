package com.example.usuario.trasplantesmorelos;

import android.app.Activity;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Donacion extends Activity implements AdapterView.OnItemSelectedListener {
    Spinner spinner;
    String query="query";
    String tipo;
  EditText comen, nombre, testigo1, testigo2, tel, lugar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        nombre = (EditText) findViewById(R.id.editText6);
        testigo1 = (EditText) findViewById(R.id.editText5);
        testigo2 = (EditText) findViewById(R.id.editText);
        tel = (EditText) findViewById(R.id.editText4);
        lugar = (EditText) findViewById(R.id.editText3);
        setContentView(R.layout.activity_donacion);
        spinner = (Spinner) findViewById(R.id.spinner);
        comen = (EditText) findViewById(R.id.editText2);
        ArrayAdapter<CharSequence> adaptar = ArrayAdapter.createFromResource(this, R.array.donar,
                android.R.layout.simple_spinner_item);
        spinner.setAdapter(adaptar);
        spinner.setOnItemSelectedListener(this);
        comen.setEnabled(false);
        comen.setText("");

    }


    @Override
    public void onItemSelected(AdapterView<?> parent, View view, int i, long id) {
        switch (i) {
            case 0:
                comen.setEnabled(false);

                break;
            case 1:
                comen.setEnabled(false);
                tipo="1";
                break;
            case 2:
                comen.setEnabled(true);
                tipo="2";
                break;
        }
    }

    public void enviar(View v) {
        Toast.makeText(getBaseContext(), "Datos enviados satisfactoriamente!", Toast.LENGTH_SHORT).show();
      try

        {


            try {
                String url = "jdbc:mysql://192.168.173.246:3306/wordpress";

                String user = "root";
               String password = "";
                Connection con = null;

                int count = 0;


                Class.forName("com.mysql.jdbc.Driver");

               con= DriverManager.getConnection(url, user, password);
                Toast.makeText(getBaseContext(), "ejecutar", Toast.LENGTH_LONG).show();
                Statement st = con.createStatement();

                query="insert into registrodonante values ('"+nombre.getText().toString()+"','"+testigo1.getText().toString()+
                        "','"+testigo2.getText().toString()+"','"+tel.getText().toString()+"','"+lugar.getText().toString()+
                        "','"+tipo+"','"+comen.getText().toString()+"')";

                st.executeUpdate(query);

                Toast.makeText(getBaseContext(), query, Toast.LENGTH_SHORT).show();
            } catch (SQLException e) {
                Toast.makeText(getBaseContext(), "primer", Toast.LENGTH_LONG).show();
                Toast.makeText(getBaseContext(),e.toString(), Toast.LENGTH_LONG).show();
                e.printStackTrace();
            }
        }
        catch(Exception e){
            Toast.makeText(getBaseContext(), "segundo", Toast.LENGTH_LONG).show();
            Toast.makeText(getBaseContext(),e.toString(), Toast.LENGTH_LONG).show();
            e.printStackTrace();

        }



    }

    @Override
    public void onNothingSelected(AdapterView<?> parent) {

    }





}