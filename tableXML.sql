use ejercicio_3;
-- Creación de la tabla TIPOENVIO
CREATE TABLE IF NOT EXISTS TIPOENVIO (
    id_tipoenvio INT PRIMARY KEY AUTO_INCREMENT,
    tipoenvio VARCHAR(255)
);

-- Creación de la tabla LOG
CREATE TABLE IF NOT EXISTS LOG (
    id_log INT PRIMARY KEY AUTO_INCREMENT,
    SECUENCIA INT,
    ADUANA INT,
    SOBRE VARCHAR(255),
    FECHA DATE,
    HORA TIME,
    VAN VARCHAR(255),
    ORIGEN VARCHAR(255),
    DESTINO VARCHAR(255),
    id_tipoenvio INT,
    FOREIGN KEY (id_tipoenvio) REFERENCES TIPOENVIO(id_tipoenvio)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla CABEZA
CREATE TABLE IF NOT EXISTS CABEZA (
    id_cabeza INT PRIMARY KEY AUTO_INCREMENT,
    FORM INT,
    NUMIDENTIF VARCHAR(255),
    FECVENCI DATE,
    ADU INT,
    AGENTE VARCHAR(255),
    TPODOCTO INT,
    TIPOINGR VARCHAR(255),
    NUMAUT VARCHAR(255),
    FECAUT DATE,
    id_log INT,
    FOREIGN KEY (id_log) REFERENCES LOG(id_log)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla IDENTIFICACION
CREATE TABLE IF NOT EXISTS IDENTIFICACION (
    id_identificacion INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(255),
    DIREC VARCHAR(255),
    CODCOMUN INT,
    TIPRUT INT,
    RUT VARCHAR(255),
    DVRUT INT,
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla ORIGENTRANSPALMACENAJE
CREATE TABLE IF NOT EXISTS ORIGENTRANSPALMACENAJE (
    id_origen INT PRIMARY KEY AUTO_INCREMENT,
    PAORIG INT,
    GPAORIG VARCHAR(255),
    PAADQ INT,
    GPAADQ VARCHAR(255),
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla ANTECEDENTESFINANCIEROS
CREATE TABLE IF NOT EXISTS ANTECEDENTESFINANCIEROS (
    id_antecedentes INT PRIMARY KEY AUTO_INCREMENT,
    GREGIMP VARCHAR(255),
    REGIMP INT,
    BCOCOM INT,
    CODORDIV INT,
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
);
	-- Creación de la tabla TOTALES
CREATE TABLE IF NOT EXISTS TOTALES (
    id_totales INT PRIMARY KEY AUTO_INCREMENT,
    TOTITEMS INT,
    FOB DECIMAL(10, 2),
    TOTHOJAS INT,
    CODFLE INT,
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla RESPUESTA
CREATE TABLE IF NOT EXISTS RESPUESTA (
    id_respuesta INT PRIMARY KEY AUTO_INCREMENT,
    FECHACEPTACION DATE,
    NUMEROENCRIPTADO VARCHAR(255),
    ESTADO VARCHAR(255),
    TIPOSELECCION INT,
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla ITEMS
CREATE TABLE IF NOT EXISTS ITEMS (
    id_item INT PRIMARY KEY AUTO_INCREMENT,
    NUMITEM INT,
    DNOMBRE VARCHAR(255),
    DMARCA VARCHAR(255),
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla OBSERVACIONESITEM
CREATE TABLE IF NOT EXISTS OBSERVACIONESITEM (
    id_observacionitem INT PRIMARY KEY AUTO_INCREMENT,
    CODOBS INT,
    DESOBS VARCHAR(255),
    id_item INT,
    FOREIGN KEY (id_item) REFERENCES ITEMS(id_item)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla CUENTASITEM
CREATE TABLE IF NOT EXISTS CUENTASITEM (
    id_cuentasitem INT PRIMARY KEY AUTO_INCREMENT,
    OTRO DECIMAL(10, 2),
    CTA INT,
    SIGVAL VARCHAR(255),
    VALOR DECIMAL(10, 2),
    id_item INT,
    FOREIGN KEY (id_item) REFERENCES ITEMS(id_item)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla VISTOSBUENOS
CREATE TABLE IF NOT EXISTS VISTOSBUENOS (
    id_vistobueno INT PRIMARY KEY AUTO_INCREMENT,
    NUREGR INT,
    ANOREG INT,
    CODVISBUEN INT,
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla BULTOS
CREATE TABLE IF NOT EXISTS BULTOS (
    id_bultos INT PRIMARY KEY AUTO_INCREMENT,
    IDBULTOS VARCHAR(255),
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla BULTO
CREATE TABLE IF NOT EXISTS BULTO (
    id_detallebulto INT PRIMARY KEY AUTO_INCREMENT,
    DESTIPBUL VARCHAR(255),
    TPOBUL INT,
    CANTBUL INT,
    id_bultos INT,
    FOREIGN KEY (id_bultos) REFERENCES BULTOS(id_bultos)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla CUENTASYVALORES
CREATE TABLE IF NOT EXISTS CUENTASYVALORES (
    id_cuentasyvalores INT PRIMARY KEY AUTO_INCREMENT,
    MON178 DECIMAL(10, 2),
    MON191 DECIMAL(10, 2),
    MON699 DECIMAL(10, 2),
    MON199 DECIMAL(10, 2),
    id_cabeza INT,
    FOREIGN KEY (id_cabeza) REFERENCES CABEZA(id_cabeza)
    -- Agrega otros campos según sea necesario
);

-- Creación de la tabla CUENTASGIRO
CREATE TABLE IF NOT EXISTS CUENTASGIRO (
    id_cuentagiro INT PRIMARY KEY AUTO_INCREMENT,
    CTAOTRO INT,
    MONOTRO DECIMAL(10, 2),
    id_cuentasyvalores INT,
    FOREIGN KEY (id_cuentasyvalores) REFERENCES CUENTASYVALORES(id_cuentasyvalores)
    -- Agrega otros campos según sea necesario
);