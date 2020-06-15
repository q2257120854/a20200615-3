<?php

class DepartmentController extends Controller
{
    // Get all departments

    public function listAction()
    {
        $results = DepartmentModel::repo()->findAllFull();

        if(is_array($results))
        {
            // Return a successful response

            return $this->json(array('success' => true, 'results' => $results));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Get given department

    public function getAction()
    {
        $request = $this->get('request');

        // Get the input

        $id = $request->postVar('id');

        // Get the objects

        $result = DepartmentModel::repo()->find($id);

        if($result)
        {
            // Return a successful response

            return $this->json(array('success' => true, 'department' => $result));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // Update department

    public function updateAction()
    {
        $request    = $this->get('request');
        $validators = $this->get('model_validation');

        // Get the input

        $id          = $request->postVar('id');
        $name        = $request->postVar('name');
        $description = $request->postVar('description');
        $operators   = $request->postVar('operators');

        $data = array(

            'name'        => $name,
            'description' => $description,
            'operators'   => $operators
        );

        // Validate the input

        $errors = $validators->validateDepartment($data);

        if(!empty($errors))
        {
            return $this->json(array('success' => false, 'errors' => $errors));
        }

        // Get the message

        $obj = DepartmentModel::repo()->find($id);

        if($obj)
        {
            // Set new properties

            $obj->setRawData($data);

            // Update the object

            $obj->save(true);

            // Return a successful response

            return $this->json(array('success' => true));
        }
        else
        {
            return $this->createAction();
        }
    }

    // Create department

    public function createAction()
    {
        $request    = $this->get('request');
        $validators = $this->get('model_validation');

        // Get the input

        $id          = $request->postVar('id');
        $name        = $request->postVar('name');
        $description = $request->postVar('description');
        $operators   = $request->postVar('operators');

        $data = array(

            'name'        => $name,
            'description' => $description,
            'operators'   => $operators
        );

        // Validate the input

        $errors = $validators->validateDepartment($data);

        if(!empty($errors))
        {
            return $this->json(array('success' => false, 'errors' => $errors));
        }

        $obj = new DepartmentModel($data);

        // Create the object

        if($obj->save(true))
        {
            // Return a successful response

            return $this->json(array('success' => true, 'id' => $obj->id));
        }

        $errors = array('Couldn\'t save the object');

        // Return an error response

        return $this->json(array('success' => false, 'errors' => $errors));
    }

    // Delete department

    public function deleteAction()
    {
        $request = $this->get('request');

        // Get the input

        $id = $request->postVar('id');

        // Get the object

        $obj = DepartmentModel::repo()->find($id);

        if($obj)
        {
            // Remove the object

            $obj->remove();

            // Return a successful response

            return $this->json(array('success' => true));
        }

        // Return an error response

        return $this->json(array('success' => false));
    }

    // List departments with online operators

    public function getOnlineAction()
    {
        return $this->json(array(

            'success'     => true,
            'departments' => DepartmentModel::repo()->findAllOnline()
        ));
    }
}

?>
