--y--
INSERT INTO `agencia` (`id_agencia`, `nombre`, `descripcion`, `tel_1`, `tel_2`, `estado`) VALUES
(1, 'Central', 'Agncia central', '4545454545', '4545454545', 'A'),
(2, 'otra', 'Agencia otra', '87545454545', '45454545454', 'A');

--y--
INSERT INTO `ajuste` (`id_ajuste`, `fecha`, `tipo_ajuste`, `descripcion`, `id_usuario`) VALUES
(1, '2013-06-11', 'Perdida', 'Perdida por ratas', 2),
(2, '2013-09-13', 'Perdida', 'Producto vencido', 2);

--y--
INSERT INTO `bitacora` (`id_bitacora`, `fecha_ingreso`, `hora_ingreso`, `fecha_salida`, `hora_salida`, `id_usuario`) VALUES
(1, '2013-09-11', '01:02:03', '2013-09-15', '01:02:03', 2),
(2, '2013-09-18', '04:02:03', '2013-09-20', '01:05:03', 19);

--y--
INSERT INTO `cargo` (`id_cargo`, `nombre`, `descripcion`) VALUES
(1, 'Gerente', 'Gerente'),
(2, 'Bodeguero', 'Bodegas'),
(3, 'Gerente', 'Gerente'),
(4, 'Bodeguero', 'Bodegas');

--y--
INSERT INTO `categoria_producto` (`id_categoria_producto`, `nombre`, `descripcion`) VALUES
(1, 'Cat_prueba', 'prueba'),
(2, 'Lapicero', 'Prueba'),
(3, 'Papel', 'Prueba');

--y--
INSERT INTO `compra` (`id_compra`, `num_factura`, `fecha`, `tipo_compra`, `estado`, `id_usuario`, `id_cotizacion`, `id_tipo_pago`, `id_tipo_factura`, `id_impuesto`, `id_quedan`, `id_proveedor`) VALUES
(1, '123213', '2013-09-18', 'Contado', 'Completado', 2, 1, 1, 2, 2, 2, 2),
(2, '234234', '2013-09-16', 'Contado', 'Completado', 19, 2, 2, 3, 2, 2, 3),
(3, '23432', '2013-09-20', 'Contado', 'Completado', 20, 2, 2, 3, 2, 2, 2),
(4, '84454', '2013-09-21', 'Contado', 'Completado', 19, 1, 1, 2, 2, 2, 3);

--y--
INSERT INTO `cotizacion` (`id_cotizacion`, `fecha`, `tiempo_vigencia`, `estado`, `id_usuario`, `id_proveedor`) VALUES
(1, '2013-09-24', 30, 'Activo', 2, 1),
(2, '2013-09-11', 10, 'Activo', 2, 1);

--y--
INSERT INTO `detalle_ajuste` (`id_detalle_ajuste`, `cantidad`, `id_lote`, `id_ajuste`) VALUES
(1, 30, 1, 2),
(2, 40, 2, 2),
(3, 35, 3, 1),
(4, 45, 4, 1);

--y--
INSERT INTO `detalle_compra` (`id_detalle_compra`, `cantidad`, `costo_unitario`, `fecha_vencimiento`, `id_compra`, `id_producto`) VALUES
(1, 200, 1.23, NULL, 1, 2),
(2, 200, 0.34, NULL, 2, 2),
(3, 100, 1.23, '2013-10-31', 3, 3),
(4, 250, 1.87, NULL, 4, 3);

--y--
INSERT INTO `detalle_cotizacion` (`id_detalle_cotizacion`, `cantidad`, `costo_unitario`, `fecha_vencimiento`, `id_cotizacion`, `id_producto`) VALUES
(1, 200, 4.5, '2013-09-30', 1, 1),
(2, 400, 3.34, '2013-09-25', 2, 1);

--y--
INSERT INTO `detalle_devolucion` (`id_detalle_devolucion`, `cantidad`, `motivo`, `id_devolucion`, `id_lote`) VALUES
(1, 20, 'Producto dañado', 1, 1),
(2, 30, 'Producto vencido', 2, 2),
(3, 45, 'Producto dañado', 3, 4);

--y--
INSERT INTO `detalle_envio` (`id_detalle_envio`, `cantidad_enviado`, `cantidad_recibido`, `id_envio`, `id_inventario`, `id_lote`) VALUES
(1, 50, 50, 1, 2, 2),
(2, 100, 100, 2, 4, 3),
(3, 80, 70, 3, 4, 3),
(4, 100, 100, 4, 5, 4);

--y--
INSERT INTO `detalle_requisicion` (`id_detalle_requisicion`, `cantidad`, `id_inventario`, `id_requisicion`) VALUES
(1, 20, 1, 47),
(2, 50, 2, 48),
(3, 40, 4, 49),
(4, 20, 5, 50);

--y--
INSERT INTO `devolucion` (`id_devolucion`, `fecha`, `titulo`, `id_usuario`) VALUES
(1, '2013-08-22', 'Devolución 1', 2),
(2, '2013-08-21', 'Devolución 2', 19),
(3, '2013-08-16', 'Devolución 3', 20);

--y--
INSERT INTO `documento` (`id_documento`, `nombre`, `numero`, `id_empleado`) VALUES
(1, 'Eduardo Grijalva', '3452345-4', 1),
(2, 'Manuel Escalante', '8464556-0', 2);

--y--
INSERT INTO `empleado` (`id_empleado`, `nombres`, `apellidos`, `direccion`, `tel_casa`, `tel_movil`, `email`, `genero`, `fecha_nacimiento`, `fecha_ingreso`, `estado`, `id_cargo`, `id_agencia`) VALUES
(1, 'Eduardo', 'Grijalva', 'mi casa', '44848484545', '45454545454', 1, 'M', '1991-12-18', '2011-02-08', 'A', 1, 1),
(2, 'Manuel', 'Escalante', 'asdfasdf', '2134124', '12341234', 1, 'm', '2013-08-05', '2013-09-26', 'a', 1, 2);

--y--
INSERT INTO `encargado` (`id_encargado`, `nombres`, `apellidos`, `tel_contacto`, `id_proveedor`) VALUES
(1, 'Jose Antonio', 'Hernández', '7734-2345', 1),
(2, 'Oscar Valerio', 'Lorenzana', '7756-1244', 2),
(3, 'Roberto Abelardo', 'Martínez', '7567-3435', 3);

--y--
INSERT INTO `envio` (`id_envio`, `fecha_envio`, `usuario_envia`, `agencia_origen`, `fecha_recibido`, `usuario_recibe`, `agencia_destino`, `estado`) VALUES
(1, '2013-09-18', 2, 2, '2013-09-19', 2, 2, 'Activo'),
(2, '2013-09-19', 2, 2, '2013-09-18', 2, 1, ''),
(3, '2013-09-11', 2, 1, '2013-09-12', 19, 2, 'Completado'),
(4, '2013-09-11', 19, 2, '2013-09-24', 20, 1, 'Completado');

--y--
INSERT INTO `estante` (`id_estante`, `nombre`, `ubicacion`, `id_agencia`) VALUES
(1, 'Estante 1', 'Zona 1', 1),
(2, 'Estante 2', 'Zona 2', 1),
(3, 'Estante 1', 'Zona 1', 2),
(4, 'Estante 2', 'Zona 2', 2);

--y--
INSERT INTO `impuesto` (`id_impuesto`, `tipo_impuesto`, `tasa`, `fecha`) VALUES
(1, 'IVA', 13, '2013-09-10'),
(2, 'Renta', 20, '2013-09-25');

--y--
INSERT INTO `inventario` (`id_inventario`, `codigo_producto`, `stock_max`, `stock`, `stock_min`, `estado`, `id_ubicacion`, `id_unidad`, `id_agencia`, `id_producto`, `id_proveedor`) VALUES
(1, 'SD2132', 50, 37, 10, '1', 1, 1, 1, 1, 1),
(2, 'GT5755', 200, 123, 30, '2', 2, 2, 1, 2, 2),
(4, 'HN5656', 120, 54, 40, '1', 1, 2, 2, 3, 2),
(5, 'UY7676', 70, 45, 25, '1', 4, 4, 2, 3, 3);

--y--
INSERT INTO `lote` (`id_lote`, `numero_lote`, `fecha_ingreso`, `fecha_caducidad`, `cantidad_ingreso`, `estado`, `id_compra`, `id_producto`, `id_proveedor`) VALUES
(1, '01', '2013-09-20', '2016-03-20', 20, 'Correcto', 1, 1, 1),
(2, '02', '2013-09-04', NULL, 150, 'Correcto', 2, 2, 3),
(3, '03', '2013-09-17', NULL, 100, 'Correcto', 2, 2, 2),
(4, '04', '2013-09-12', NULL, 150, 'Correcto', 4, 2, 3);

--y--
INSERT INTO `lote_detalle` (`id_lote_detalle`, `cantidad`, `fecha_recibido`, `id_lote`, `id_inventario`) VALUES
(1, 20, '2013-09-20', 1, 1),
(2, 50, '2013-09-19', 2, 4),
(3, 40, '2013-09-25', 3, 5),
(4, 20, '2013-09-27', 4, 5);

--y--
INSERT INTO `marca` (`id_marca`, `nombre`, `descripcion`) VALUES
(1, 'facela', 'muy buena'),
(2, 'Zebra', 'Marca de buena calidad'),
(3, 'Bic', 'Marca de calidad regular');

--y--
INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `url`, `id_marca`, `id_categoria_producto`) VALUES
(1, 'Libro', 'Libro', 'www', 1, 1),
(2, 'Lapicero', 'qasdsdsa', 'www333', 1, 3),
(3, 'Toner', 'asdasdas', 'www', 1, 2);

--y--
INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `direccion`, `tel_contacto`) VALUES
(1, 'Proveedor Uno', 'San Salvador', '2223-1234'),
(2, 'Proveedor Dos', 'La Libertad', '2323-1234'),
(3, 'Proveedor Tres', 'Santa Ana', '3345-4532');

--y--
INSERT INTO `quedan` (`id_quedan`, `numero_quedan`, `fecha_pago`, `nombre_cheque`) VALUES
(1, '34534435', '2013-09-17', 'Nombre cheque uno'),
(2, '453454', '2013-09-19', 'Nombre cheque dos'),
(3, '24234322', '2013-09-27', 'Nombre cheque tres');

--y--
INSERT INTO `requisicion` (`id_requisicion`, `fecha`, `estado`, `descripcion`, `id_usuario`, `id_agencia`) VALUES
(47, '2013-08-08', 'A', 'dskflsdkjfs', 2, 1),
(48, '2013-08-08', 'A', 'dskflsdkjfs', 2, 1),
(49, '2013-08-08', 'A', 'dskflsdkjfs', 2, 1),
(50, '2013-08-09', 'A', 'asfasjklfjk', 2, 1),
(51, '2013-08-28', 'A', 'dsfdsdf', 2, 1),
(52, '2013-08-28', 'A', 'dsfdsdf', 2, 1),
(53, '2013-08-30', 'A', 'asas', 2, 1),
(54, '2013-08-31', 'A', 'asdasd', 2, 2);

--y--
INSERT INTO `tipo_factura` (`id_tipo_factura`, `nombre`, `descripcion`) VALUES
(1, 'Tipo Factura 1', 'Descripción'),
(2, 'Tipo Factura 2', 'Descripción'),
(3, 'Tipo Factura 3', 'Descripción'),
(4, 'Tipo Factura 4', 'Descripción');

--y--
INSERT INTO `tipo_pago` (`id_tipo_pago`, `nombre`, `descripcion`) VALUES
(1, 'Contado', 'Pago al contado'),
(2, 'Credito', 'Pago al credito');

--y--
INSERT INTO `ubicacion` (`id_ubicacion`, `nivel`, `sector`, `id_estante`) VALUES
(1, 'Primer Nivel', 'Sector 1', 1),
(2, 'Segundo Nivel', 'Sector 2', 2),
(3, 'Primer Nivel', 'Sector 2', 3),
(4, 'Segundo Nivel', 'Sector 1', 4);

--y--
INSERT INTO `unidad_de_medida` (`id_unidad`, `nombre`, `descripcion`) VALUES
(1, 'Metro', 'Descripción'),
(2, 'Kilogramo', 'Descripción'),
(3, 'Galón', 'Descripción'),
(4, 'Pulgada', 'Descripción');

