package ac2;

import java.util.ArrayList;

public class Remedio {
    private int codigoRemedio;
    private int mg;
    private String nome;
   
    ArrayList<Remedio> remedios;

    public Remedio() {
       remedios = new ArrayList<>();
    }

    public Remedio(int codigoRemedio, int mg, String nome, ArrayList<Remedio> remedios) {
        this.codigoRemedio = codigoRemedio;
        this.mg = mg;
        this.nome = nome;
        this.remedios = remedios;
    }

    public int getCodigoRemedio() {
        return codigoRemedio;
    }

    public void setCodigoRemedio(int codigoRemedio) {
        this.codigoRemedio = codigoRemedio;
    }

    public int getMg() {
        return mg;
    }

    public void setMg(int mg) {
        this.mg = mg;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public ArrayList<Remedio> getRemedios() {
        return remedios;
    }

    public void setRemedios(ArrayList<Remedio> remedios) {
        this.remedios = remedios;
    }
    
    @Override
    public String toString(){
    return "Codigo do remedio: "+codigoRemedio+
           "Miligramas: "+mg;
    }
}
