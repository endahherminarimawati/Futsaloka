package com.futsal.tpfutsal;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.LinearLayout;

public class RegisterActivity extends AppCompatActivity {

    private LinearLayout reg;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        reg = (LinearLayout)findViewById(R.id.register);
    }
}