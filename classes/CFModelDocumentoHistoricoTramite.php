<?php

/*
 * Copyright 2008 ICMBio
 * Este arquivo é parte do programa SISICMBio
 * O SISICMBio é um software livre; você pode redistribuíção e/ou modifição dentro dos termos
 * da Licença Pública Geral GNU como publicada pela Fundação do Software Livre (FSF); na versão
 * 2 da Licença.
 *
 * Este programa é distribuíção na esperança que possa ser útil, mas SEM NENHUMA GARANTIA; sem
 * uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU/GPL em português para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU, sob o título "LICENCA.txt",
 * junto com este programa, se não, acesse o Portal do Software Público Brasileiro no endereço
 * www.softwarepublico.gov.br ou escreva para a Fundação do Software Livre(FSF)
 * Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301, USA
 * */

class CFModelDocumentoHistoricoTramite extends CFModelAbstract {

    /**
     * @var string
     */
    protected $_schema = 'sgdoc';

    /**
     * @var string
     */
    protected $_table = 'TB_HISTORICO_TRAMITE_DOCUMENTOS';

    /**
     * @var string
     */
    protected $_primary = 'ID';

    /**
     * @var string
     */
    protected $_sequence = 'TB_HISTORICO_TRAMITE_DOCUMENTOS_ID_SEQ';

    /**
     * @var array
     */
    protected $_fields = array(
        'DIGITAL' => 'string',
        'ID_USUARIO' => 'integer',
        'USUARIO' => 'integer',
        'ID_UNIDADE' => 'integer',
        'DIRETORIA' => 'integer',
        'ACAO' => 'integer',
        'ORIGEM' => 'integer',
        'DESTINO' => 'integer',
        'DT_TRAMITE' => 'integer',
        'ST_ATIVO' => 'integer'
    );

}