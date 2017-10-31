<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $templates
 * @property string $commit_log
 * @property int $category_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property int $modified_user_id
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $delete_flg
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ModifiedUser $modified_user
 * @property \App\Model\Entity\Tag[] $tags
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'body' => true,
        'templates' => true,
        'commit_log' => true,
        'category_id' => true,
        'user_id' => true,
        'created' => true,
        'modified_user_id' => true,
        'modified' => true,
        'delete_flg' => true,
        'deleted' => true,
        'category' => true,
        'user' => true,
        'modified_user' => true,
        'tags' => true
    ];
}
