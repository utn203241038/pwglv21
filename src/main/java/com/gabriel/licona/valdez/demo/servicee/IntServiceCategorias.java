package com.gabriel.licona.valdez.demo.servicee;

import java.util.List;

import com.gabriel.licona.valdez.demo.model.Categoria;

public interface IntServiceCategorias {

	public List<Categoria> obtenerCategoria();
	public void guardar(Categoria categoria);
	public Categoria buscarPorId(Integer idCategoria);
	public void eliminar(Integer idCategoria);
	public Integer numeroCategoria();
}
