package com.example.usuario.trasplantesmorelos;

import android.webkit.WebView;

/**
 * Created by Usuario on 06/11/2015.
 */
public interface Callback {
    boolean shoulOverrideUrlLoading(WebView view, String url);
}
