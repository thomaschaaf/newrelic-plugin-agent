<?php
/**
 * PHP APC Data for NewRelic Plugin Agent
 *
 */
Header('Content-Type: application/json');
echo json_encode(array('user_stats' => apc_cache_info('user', true),
                       'shared_memory' => apc_sma_info(true)));
