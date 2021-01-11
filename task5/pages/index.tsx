import React from "react";

type MyState = {
  displayNumbers: any;
};

type MyProps = {};

class Index extends React.Component<MyProps, MyState> {
  constructor(props, ...args) {
    super(props, ...args);

    this.state = {
      displayNumbers: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    };
  }

  render() {
    return (
      <React.Fragment>
        {this.state.displayNumbers.map(function (number) {
          return (
            <React.Fragment>
              <span style={{ display: "block" }}>{number}</span>
            </React.Fragment>
          );
        })}
      </React.Fragment>
    );
  }
}

export default Index;
