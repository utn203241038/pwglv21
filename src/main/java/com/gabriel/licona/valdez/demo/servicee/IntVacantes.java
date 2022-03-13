package com.gabriel.licona.valdez.demo.servicee;

import java.util.List;


import com.gabriel.licona.valdez.demo.model.Vacante;

public interface IntVacantes {

	public List<Vacante>obtenerTodos();
	public void eliminar(Integer IdVacante);
	public Vacante buscarPorId(Integer IdVacante);
	public void agregar(Vacante vacante);
	//********************************************
	public int numeroRegistros();

}