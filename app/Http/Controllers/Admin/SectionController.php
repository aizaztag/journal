<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Contracts\SectionContract;

class SectionController extends BaseController
{


    protected $sectionRepository;

    public function __construct(SectionContract $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = $this->sectionRepository->listsections();

        $this->setPageTitle('Section', 'List of all sections');
        return view('admin.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setPageTitle('Sections', 'Create Section');
        return view('admin.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          =>  'required'
        ]);

        $params = $request->except('_token');

        $section = $this->sectionRepository->createsection($params);

        if (!$section) {
            return $this->responseRedirectBack('Error occurred while creating section.', 'error', true, true);
        }
        return $this->responseRedirect('admin.sections.index', 'Section added successfully' ,'success',false, false);
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $section = $this->sectionRepository->findsectionById($id);

        $this->setPageTitle('Sections', 'Edit Section : '.$section->name);
        return view('admin.sections.edit', compact('section'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'          =>  'required',
        ]);

        $params = $request->except('_token');
        $section = $this->sectionRepository->updatesection($params);

        if (!$section) {
            return $this->responseRedirectBack('Error occurred while updating section.', 'error', true, true);
        }
        return $this->responseRedirectBack('Section updated successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $section = $this->sectionRepository->deletesection($id);

        if (!$section) {
            return $this->responseRedirectBack('Error occurred while deleting section.', 'error', true, true);
        }
        return $this->responseRedirect('admin.sections.index', 'section deleted successfully' ,'success',false, false);
    }


}
