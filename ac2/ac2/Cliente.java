package ac2;

import java.util.ArrayList;


public class Cliente extends Pessoa {
    private int numeroCadastro;
    private int tempoFidelidade;
    ArrayList<Remedio> remedios;

    public Cliente() {
        remedios = new ArrayList<>();
    }

    public Cliente(int numeroCadastro, int tempoFidelidade, ArrayList<Remedio> remedios) {
        this.numeroCadastro = numeroCadastro;
        this.tempoFidelidade = tempoFidelidade;
        this.remedios = remedios;
    }

    public Cliente(int numeroCadastro, int tempoFidelidade, ArrayList<Remedio> remedios, String nome, String CPF) {
        super(nome, CPF);
        this.numeroCadastro = numeroCadastro;
        this.tempoFidelidade = tempoFidelidade;
        this.remedios = remedios;
    }

    public int getNumeroCadastro() {
        return numeroCadastro;
    }

    public void setNumeroCadastro(int numeroCadastro) {
        this.numeroCadastro = numeroCadastro;
    }

    public int getTempoFidelidade() {
        return tempoFidelidade;
    }

    public void setTempoFidelidade(int tempoFidelidade) {
        this.tempoFidelidade = tempoFidelidade;
    }

    public ArrayList<Remedio> getRemedios() {
        return remedios;
    }

    public void setRemedios(ArrayList<Remedio> remedios) {
        this.remedios = remedios;
    }

    
    
    
}
