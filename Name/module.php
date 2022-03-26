<?php

class Name extends IPSModule {

    /*
    * Internal function of SDK
    */
    public function Create() {
        // declare parent
        parent::Create();
    }
    /*
     * Internal function of SDK
     */
    public function ApplyChanges() {
        // declare parent
        parent::ApplyChanges();


    }

    /**
     * Return Configuration on request
     * @return false|string
     */
    public function GetConfigurationForm() {
        // return current form
        $Form = json_encode([
            'elements' => $this->FormElements(),
            'actions'  => $this->FormActions(),
            'status'   => $this->FormStatus(),
        ]);
        // for debug reason
        $this->SendDebug('FORM', $Form, 0);
        $this->SendDebug('FORM', json_last_error_msg(), 0);

        return $Form;
    }

    /**
     * @return array[] Form Actions
     */
    protected function FormActions() {

        return[];
    }

    /**
     * @return array[] Form Elements
     */
    protected function FormElements() {

        return[];
    }

    /**
     * @return array[] Form Status
     */
    protected function FormStatus() {
        return [
            [
                'code'    => 101,
                'icon'    => 'inactive',
                'caption' => 'Creating instance.',
            ],
            [
                'code'    => 102,
                'icon'    => 'active',
                'caption' => 'Name created.',
            ],
            [
                'code'    => 104,
                'icon'    => 'inactive',
                'caption' => 'interface closed.',
            ]
        ];
    }

}