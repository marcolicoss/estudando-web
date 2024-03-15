package ac2;

import java.util.ArrayList;


public class Farmaceutico extends Pessoa{
    private int salario;
    private String CRF;
     ArrayList<Remedio> remedios;
    
    public Farmaceutico() {
        remedios = new ArrayList<>();
    }

    public Farmaceutico(int salario, String CRF, ArrayList<Remedio> remedios) {
        this.salario = salario;
        this.CRF = CRF;
        this.remedios = remedios;
    }

    public Farmaceutico(int salario, String CRF, ArrayList<Remedio> remedios, String nome, String CPF) {
        super(nome, CPF);
        this.salario = salario;
        this.CRF = CRF;
        this.remedios = remedios;
    }

    public int getSalario() {
        return salario;
    }

    public void setSalario(int salario) {
        this.salario = salario;
    }

    public String getCRF() {
        return CRF;
    }

    public void setCRF(String CRF) {
        this.CRF = CRF;
    }

    public ArrayList<Remedio> getRemedios() {
        return remedios;
    }

    public void setRemedios(ArrayList<Remedio> remedios) {
        this.remedios = remedios;
    }

    @Override
   public String toString(){
       return "\nNome: "+getNome()+
              "\nCPF: "+getCPF()+
              "\nSalario"+salario+
              "\nCRF:"+CRF;
   } 
    
}
