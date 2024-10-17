<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

abstract class AbstractUninstall extends AbstractDb
{
    private const UNINSTALL_DATA = [
        'core_config_data' => 'DELETE FROM %s WHERE path LIKE "&jaroslawzielinski_torah&";',
        'layout_update' => 'DELETE FROM %s WHERE xml LIKE "&TorahVerse&";',
        'patch_list' => 'DELETE FROM %s WHERE patch_name LIKE "&TorahVerse&";',
        'torahverse_quotes' => 'DROP table %s;',
        'torahverse_verses' => 'DROP table %s;',
        'torahverse_groups' => 'DROP table %s;',
        'ui_bookmark' => 'DELETE FROM %s WHERE namespace LIKE "&jaroslawzielinski_torahverse&";',
        'widget_instance' => 'DELETE FROM %s WHERE instance_type LIKE "&TorahVerse&";'
    ];

    /**
     */
    protected function getUninstallData(): array
    {
        return self::UNINSTALL_DATA;
    }

    public function unInstall(): void
    {
        $connection = $this->getConnection();
        foreach ($this->getUninstallData() as $tableNameItem => $queryItem) {
            $tableName = $connection->getTableName($tableNameItem);
            $query = sprintf(
                $queryItem,
                $tableName
            );
            $connection->query(str_replace('&', '%', $query));
        }
    }
}
