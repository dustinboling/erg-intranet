<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use Treestoneit\BelongsToField\BelongsToField;
use Causelabs\ResourceIndexLink\ResourceIndexLink;
use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;

class Folder extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Folder';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name', 'description'
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Agent Viewable';

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            HasMany::make('Sub Folders', 'folders', 'App\Nova\Folder'),
            ID::make()
                ->hideFromIndex()
                ->hideFromDetail(),
            ResourceIndexLink::make('Folder Name', 'name')->sortable(),
            BelongsTo::make('Parent Folder', 'folder', 'App\Nova\Folder')->nullable()->hideFromIndex(),
            Textarea::make('Description')->alwaysShow(),
            Medialibrary::make('Media')
                ->sortable()
                ->hideFromIndex(), // it uses default collection
            HasMany::make('Notes'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        // This will allow a full list of folders to populate
        // dropdown menus in related resources
        if($request->first == 'false') {
            return $query->orderBy('name', 'asc');
        }

        // Only show top level folders on Folder index page
        if(!$request->__isSet('viaResource') && !$request->__isSet('viaResourceId') && !$request->__isSet('viaRelationship') && !$request->__isSet('relationshipType')) {
            return $query->where('folder_id', null)->orderBy('name', 'asc')->get();
        }
    }
}
