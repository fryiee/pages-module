<?php namespace Anomaly\PagesModule\Type;

use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class TypeRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PagesModule\Type
 */
class TypeRepository extends EntryRepository implements TypeRepositoryInterface
{

    /**
     * The page type model.
     *
     * @var TypeModel
     */
    protected $model;

    /**
     * Create a new TypeRepository instance.
     *
     * @param TypeModel $model
     */
    public function __construct(TypeModel $model)
    {
        $this->model = $model;
    }
}
