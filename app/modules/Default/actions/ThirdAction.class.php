<?php

class Default_ThirdAction extends downloadvarDefaultBaseAction
{
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		return 'Success';
	}
public function executeRead(AgaviRequestDataHolder $rd)
	{
		$value=array();
		$rand=array();

		$random = MatterQuery::create()->orderByShortSubject()->orderByMainSubject()->orderByDownloadCount()->orderByDate()->paginate(1,10);
		foreach ($random as $r)
		{
			$rand[] = $r->toArray();
		}
		$this->setAttribute('random', $rand);
		
		$cat = OneCategoryQuery::create()->find();
		$this->setAttribute('cat', $cat->toArray());
		
		$last = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->limit(6)->find();
		$this->setAttribute('last', $last->toArray());
		
		$lastnews = NewsQuery::create()->orderByOrder()->limit(1)->find();
		$this->setAttribute('lastnews', $lastnews->toArray());
	
		/* paginate and oredr and find matter filter by category*/
		$id = $rd->getParameter('id');
		$category_name = $rd->getParameter('th');
		$matter = MatterQuery::create()
		->orderByOrder()
		->useThirdCategoryQuery()
					->filterByEnglishName($category_name)
		->endUse()
		->paginate($id,14);
		foreach ($matter as $m)
		{
			$value[]=$m->toArray();
		}
		$page = $matter->getLinks(100);
		$this->setAttribute('page', $page);
		$this->setAttribute('matter', $value);
		/* end */
		return 'Success';
		
	}
}

?>