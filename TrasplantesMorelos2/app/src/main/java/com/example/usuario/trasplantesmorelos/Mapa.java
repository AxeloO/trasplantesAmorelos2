package com.example.usuario.trasplantesmorelos;

import android.app.Activity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.MenuItem;
import android.view.Window;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class Mapa extends Activity {
    WebView webview;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mapa);
        webview = (WebView) findViewById(R.id.webView);
        WebSettings webSettings = webview.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webview.setWebViewClient(new Callback());
        webview.loadUrl("http://www.asociacionale.org/index.php/es/");
    }

        private class Callback extends WebViewClient {

        public boolean shoulOverrideUrlLoading(WebView view, String url) {
            webview.loadUrl("http://www.asociacionale.org/index.php/es/");
            return true;
        }
    }

}




